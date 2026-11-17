<?php

namespace JeffersonGoncalves\Filament\LgpdRipd\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\LgpdRipd\LgpdRipdPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                LgpdRipdPlugin::make(),
            ]);
    }
}
