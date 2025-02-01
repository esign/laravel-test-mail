<?php

namespace Esign\TestMail;

use Esign\TestMail\Commands\MailTestCommand;
use Illuminate\Support\ServiceProvider;

class TestMailServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'test-mail');

        if ($this->app->runningInConsole()) {
            $this->commands([
                MailTestCommand::class,
            ]);
        }
    }
}
