<?php

namespace App\Facades;
class Container extends Facade
{
    public static function self()
    {
        return self::$app->getContainer();
    }
}