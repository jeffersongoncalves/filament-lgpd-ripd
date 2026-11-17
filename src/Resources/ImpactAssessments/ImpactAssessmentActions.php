<?php

namespace JeffersonGoncalves\Filament\LgpdRipd\Resources\ImpactAssessments;

use Filament\Actions\Action;
use Filament\Actions\MountableAction;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use Illuminate\Support\HtmlString;
use JeffersonGoncalves\LgpdRipd\Enums\AssessmentStatus;
use JeffersonGoncalves\LgpdRipd\Models\ImpactAssessment;
use JeffersonGoncalves\LgpdRipd\RipdManager;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ImpactAssessmentActions
{
    public static function approve(string $class = Action::class): Action|TableAction
    {
        return $class::make('approve')
            ->label(ImpactAssessmentResource::label('actions.approve'))
            ->icon('heroicon-o-check-badge')
            ->color('success')
            ->visible(fn (ImpactAssessment $record): bool => $record->status === AssessmentStatus::Draft || $record->isReviewDue())
            ->form([
                TextInput::make('approved_by')
                    ->label(ImpactAssessmentResource::label('fields.approved_by'))
                    ->default(fn (): ?string => auth()->user()?->getAttribute('name'))
                    ->required()
                    ->maxLength(255),
            ])
            ->action(function (ImpactAssessment $record, array $data, MountableAction $action): void {
                if ($record->scoredRisks() === []) {
                    Notification::make()->danger()->title(ImpactAssessmentResource::label('notifications.no_risks'))->send();
                    $action->halt();
                }

                $record->approve((string) $data['approved_by']);
                Notification::make()->success()->title(ImpactAssessmentResource::label('notifications.approved'))->send();
            });
    }

    public static function export(string $class = Action::class): Action|TableAction
    {
        return $class::make('export')
            ->label(ImpactAssessmentResource::label('actions.export'))
            ->icon('heroicon-o-arrow-down-tray')
            ->color('gray')
            ->action(fn (ImpactAssessment $record): StreamedResponse => response()->streamDownload(function () use ($record): void {
                echo json_encode(app(RipdManager::class)->export($record), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
            }, 'ripd-'.$record->getKey().'.json', ['Content-Type' => 'application/json']));
    }

    /**
     * Processing activities with sensitive data or legitimate interest and no assessment yet.
     */
    public static function candidates(string $class = Action::class): Action|TableAction
    {
        return $class::make('candidates')
            ->label(ImpactAssessmentResource::label('actions.candidates'))
            ->icon('heroicon-o-exclamation-triangle')
            ->color('warning')
            ->badge(fn (): ?int => count(app(RipdManager::class)->candidates()) ?: null)
            ->modalHeading(ImpactAssessmentResource::label('actions.candidates'))
            ->modalDescription(ImpactAssessmentResource::label('help.candidates'))
            ->modalContent(function (): HtmlString {
                $candidates = app(RipdManager::class)->candidates();

                if ($candidates === []) {
                    return new HtmlString('<p>'.e(ImpactAssessmentResource::label('help.no_candidates')).'</p>');
                }

                $items = array_map(fn (array $candidate): string => '<li><strong>'.e($candidate['activity']->name).'</strong>: '
                    .e(implode(', ', array_map(fn (string $reason): string => ImpactAssessmentResource::label("reasons.{$reason}"), $candidate['reasons']))).'</li>', $candidates);

                return new HtmlString('<ul style="list-style: disc; padding-inline-start: 1.25rem;">'.implode('', $items).'</ul>');
            })
            ->modalSubmitAction(false)
            ->modalCancelActionLabel(ImpactAssessmentResource::label('actions.close'));
    }
}
