<?php

namespace Esign\TestMail\Tests;

use Esign\TestMail\TestMailServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [TestMailServiceProvider::class];
    }
} 