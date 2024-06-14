<?php

namespace App\Providers;

use App\Services\Newsletter;

use App\Services\DripNewsletter as Drip;
use App\Services\MailchimpNewsletter as Mailchimp;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

use MailchimpMarketing\ApiClient;
use PDO;
use stdClass;

class AppServiceProvider extends ServiceProvider
{
    /*
    Register any application services.
    */

    public function register(): void
    {
        // Mailchimp Template (Real)
        app()->bind(Newsletter::class, function () {
            $apiKey = config('services.mailchimp.key');
            $listID = config('services.mailchimp.lists.subscribers');

            $instance = (new ApiClient)->setConfig([
                'apiKey' => $apiKey,
                'server' => 'us17',
            ]);

            return new Mailchimp($instance, $listID);
        });

        // Drip Template (Fake Example)
        app()->bind(Newsletter::class, function () {
            $instance = new stdClass();
            $dripKey = Str::password();

            return new Drip($instance, $dripKey);
        });
    }

    /*
    Bootstrap any application services.
    */

    public function boot(): void
    {
    }
}
