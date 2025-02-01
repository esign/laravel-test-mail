<?php

namespace Esign\TestMail\Facades;

use Illuminate\Support\Facades\Facade;

class TestMailFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'test-mail';
    }
}
