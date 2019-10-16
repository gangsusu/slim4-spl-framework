<?php

namespace App\Facades;

class Route extends Facade
{
    public static function self()
    {
        return self::$app;
    }
}
