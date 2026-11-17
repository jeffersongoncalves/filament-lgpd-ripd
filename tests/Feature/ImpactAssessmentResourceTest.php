<?php

use JeffersonGoncalves\Filament\LgpdRipd\LgpdRipdPlugin;
use JeffersonGoncalves\Filament\LgpdRipd\Resources\ImpactAssessments\ImpactAssessmentActions;
use JeffersonGoncalves\Filament\LgpdRipd\Resources\ImpactAssessments\ImpactAssessmentResource;
use JeffersonGoncalves\Filament\LgpdRipd\Resources\ImpactAssessments\Pages\CreateImpactAssessment;
use JeffersonGoncalves\Filament\LgpdRipd\Resources\ImpactAssessments\Pages\EditImpactAssessment;
use JeffersonGoncalves\Filament\LgpdRipd\Resources\ImpactAssessments\Pages\ListImpactAssessments;
use JeffersonGoncalves\Filament\LgpdRipd\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Lgpd\Enums\LegalBasis;
use JeffersonGoncalves\LgpdRecords\Models\ProcessingActivity;
use JeffersonGoncalves\LgpdRipd\Enums\AssessmentStatus;
use JeffersonGoncalves\LgpdRipd\Enums\RiskLevel;
use JeffersonGoncalves\LgpdRipd\Models\ImpactAssessment;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Ana Souza', 'email' => 'dpo@example.com']));
});

function risky(): ImpactAssessment
{
    return ImpactAssessment::create([
        'title' => 'Fraud scoring',
        'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => 2, 'impact' => 3, 'residual_likelihood' => 1, 'residual_impact' => 3]],
    ]);
}

it('creates an assessment linked to a processing activity, with scored risks', function () {
    $activity = ProcessingActivity::create(['name' => 'Fraud scoring', 'purpose' => 'Prevent fraud']);

    Livewire::test(CreateImpactAssessment::class)
        ->fillForm([
            'title' => 'Fraud scoring',
            'processing_activity_id' => $activity->getKey(),
            'necessity' => 'Only payment metadata',
            'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => '2', 'impact' => '3', 'residual_likelihood' => '1', 'residual_impact' => '3']],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $ripd = ImpactAssessment::sole();

    expect($ripd->processingActivity->is($activity))->toBeTrue()
        ->and($ripd->highestRisk(residual: false))->toBe(RiskLevel::High)
        ->and($ripd->highestRisk())->toBe(RiskLevel::Medium);
});

it('lists assessments with their risk levels', function () {
    $ripd = risky();

    Livewire::test(ListImpactAssessments::class)
        ->assertCanSeeTableRecords([$ripd])
        ->assertSee('High')
        ->assertSee('Medium')
        ->assertSee('Draft');
});

it('approves with the approver name', function () {
    $ripd = risky();

    Livewire::test(EditImpactAssessment::class, ['record' => $ripd->getKey()])
        ->callAction('approve', ['approved_by' => 'Ana Souza (DPO)'])
        ->assertHasNoActionErrors();

    expect($ripd->fresh())
        ->status->toBe(AssessmentStatus::Approved)
        ->approved_by->toBe('Ana Souza (DPO)')
        ->next_review_at->not->toBeNull();
});

it('refuses to approve without risks', function () {
    $ripd = ImpactAssessment::create(['title' => 'Empty']);

    Livewire::test(EditImpactAssessment::class, ['record' => $ripd->getKey()])
        ->callAction('approve', ['approved_by' => 'DPO']);

    expect($ripd->fresh()->status)->toBe(AssessmentStatus::Draft);
});

it('exports one assessment as JSON', function () {
    $ripd = risky();

    Livewire::test(EditImpactAssessment::class, ['record' => $ripd->getKey()])
        ->callAction('export')
        ->assertFileDownloaded('ripd-'.$ripd->getKey().'.json');
});

it('shows the processing activities that still need an assessment', function () {
    ProcessingActivity::create(['name' => 'Behavioural ads', 'purpose' => 'Ads', 'legal_basis' => LegalBasis::LegitimateInterest]);

    Livewire::test(ListImpactAssessments::class)->assertActionVisible('candidates');

    expect((string) ImpactAssessmentActions::candidates()->getModalContent())
        ->toContain('Behavioural ads')
        ->toContain('legitimate interest');
});

it('applies the fluent plugin options', function () {
    LgpdRipdPlugin::get()->navigationGroup('LGPD')->slug('ripd');

    expect(ImpactAssessmentResource::getNavigationGroup())->toBe('LGPD')
        ->and(ImpactAssessmentResource::getSlug())->toBe('ripd');
});
