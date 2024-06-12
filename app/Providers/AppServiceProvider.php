<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /*
    Register any application services.
    */

    public function register(): void
    {
        app()->bind('apiKey', fn () => config('services.mailchimp.key'));
        app()->bind('listID', fn () => config('services.mailchimp.lists.subscribers'));
    }

    /*
    Bootstrap any application services.
    */

    public function boot(): void
    {
    }
}
