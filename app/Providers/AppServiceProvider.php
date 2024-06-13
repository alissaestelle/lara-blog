<?php

namespace App\Providers;

use App\Services\Newsletter;
use App\Services\MailchimpNewsletter as Mailchimp;
use Illuminate\Support\ServiceProvider;

use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /*
    Register any application services.
    */

    public function register(): void
    {
        // app()->bind('apiKey', fn () => config('services.mailchimp.key'));
        // app()->bind('listID', fn () => config('services.mailchimp.lists.subscribers'));

        app()->bind(Newsletter::class, function () {
            $apiKey = config('services.mailchimp.key');
            $listID = config('services.mailchimp.lists.subscribers');

            $instance = (new ApiClient)->setConfig([
                'apiKey' => $apiKey,
                'server' => 'us17',
            ]);

            return new Mailchimp($instance, $listID);
        });
    }

    /*
    Bootstrap any application services.
    */

    public function boot(): void
    {
    }
}
