<?php

namespace  Nyawach\LaravelPesapal;

use Illuminate\Support\ServiceProvider;

class PesaPalServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('nyawach-pesapal', function () {
            return new LaravelPesapal();
        });
        $this->mergeConfigFrom(
            __DIR__.'/config/pesapal.php', 'pesapal'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/2022_10_31_015126_create_pesapals_table');
        $this->publishes([
            __DIR__.'/config/pesapal.php' => config_path('pesapal.php'),
        ]);

    }
}

