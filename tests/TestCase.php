<?php

namespace JeffersonGoncalves\Filament\LgpdRipd\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\Facades\Filament;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Schemas\SchemasServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use JeffersonGoncalves\Filament\LgpdRipd\LgpdRipdServiceProvider;
use JeffersonGoncalves\Filament\LgpdRipd\Tests\Fixtures\TestPanelProvider;
use JeffersonGoncalves\Filament\LgpdRipd\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Lgpd\LgpdServiceProvider;
use JeffersonGoncalves\LgpdRecords\LgpdRecordsServiceProvider as RecordsServiceProvider;
use JeffersonGoncalves\LgpdRipd\LgpdRipdServiceProvider as RipdServiceProvider;
use JeffersonGoncalves\PestPluginDatabaseMigrations\LoadsPackageMigrations;
use Livewire\LivewireServiceProvider;
use Livewire\Mechanisms\DataStore;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    use LoadsPackageMigrations;

    protected function setUp(): void
    {
        parent::setUp();

        // Filament v5 binds Livewire's DataStore with bind() instead of singleton(): keep one instance per test.
        app()->instance(DataStore::class, app(DataStore::class));

        Filament::setCurrentPanel(Filament::getDefaultPanel());

        $this->withoutVite();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            BladeIconsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            SupportServiceProvider::class,
            SchemasServiceProvider::class,
            FormsServiceProvider::class,
            TablesServiceProvider::class,
            ActionsServiceProvider::class,
            InfolistsServiceProvider::class,
            NotificationsServiceProvider::class,
            WidgetsServiceProvider::class,
            FilamentServiceProvider::class,
            LgpdServiceProvider::class,
            RecordsServiceProvider::class,
            RipdServiceProvider::class,
            LgpdRipdServiceProvider::class,
            TestPanelProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('app.key', 'base64:'.base64_encode(str_repeat('a', 32)));
        $app['config']->set('database.default', 'testing');
        $app['config']->set('auth.providers.users.model', TestUser::class);
        $app['config']->set('lgpd.models', [TestUser::class]);
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadPackageMigrations(RecordsServiceProvider::class);
        $this->loadPackageMigrations(RipdServiceProvider::class);

        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->default('');
            $table->rememberToken();
        });
    }
}
