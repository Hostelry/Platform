<?php

declare(strict_types=1);

namespace CodingMatters\Account\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

final class AccountServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot() : void
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(module_path('Account', 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() : void
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig() : void
    {
        $this->publishes([
            module_path('Account', 'Config/config.php') => config_path('account.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Account', 'Config/config.php'),
            'account'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews() : void
    {
        $viewPath = resource_path('views/modules/account');

        $sourcePath = module_path('Account', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], 'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/account';
        }, \Config::get('view.paths')), [$sourcePath]), 'account');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations() : void
    {
        $langPath = resource_path('lang/modules/account');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'account');
        } else {
            $this->loadTranslationsFrom(module_path('Account', 'Resources/lang'), 'account');
        }
    }

    /**
     * Register an additional directory of factories.
     *
     * @return void
     */
    public function registerFactories() : void
    {
        if (! app()->environment('production') && $this->app->runningInConsole()) {
            app(Factory::class)->load(module_path('Account', 'Database/Factories'));
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() : array
    {
        return [];
    }
}
