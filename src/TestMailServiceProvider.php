<?php

namespace Esign\TestMail;

use Illuminate\Support\ServiceProvider;

class TestMailServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([$this->configPath() => config_path('test-mail.php')], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'test-mail');

        $this->app->singleton('test-mail', function () {
            return new TestMail;
        });
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/test-mail.php';
    }
}
