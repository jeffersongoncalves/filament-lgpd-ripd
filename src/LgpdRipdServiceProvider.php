<?php

namespace JeffersonGoncalves\Filament\LgpdRipd;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LgpdRipdServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-lgpd-ripd')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
