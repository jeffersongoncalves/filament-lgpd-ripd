<?php

namespace JeffersonGoncalves\Filament\LgpdRipd;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdRipdServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd-ripd';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
