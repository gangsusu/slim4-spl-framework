<?php

namespace App\Facades;
class DB extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DB';
    }
}