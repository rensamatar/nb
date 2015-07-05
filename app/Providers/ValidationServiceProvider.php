<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootAlphaSpaceValidator();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function bootAlphaSpaceValidator()
    {
        $validator = $this->app->make('validator');
        $validator->extend('alpha_space', '\\App\\Validation\\AlphaSpaceValidator@validate');
    }

}