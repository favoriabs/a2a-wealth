<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
class CompanyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Company\CompanyContract',
            'App\Repositories\Company\EloquentCompanyRepository');
    }
}
