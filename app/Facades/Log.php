<?php

namespace App\Facades;

class Log extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'logger';
    }
}
