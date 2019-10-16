<?php

namespace App\Facades;

class Facade
{
    public static $app;

    public static function __callStatic($method, $args)
    {
        return static::self()->{$method}(...$args);
    }

    public static function setFacadeApplication($app)
    {
        self::$app = $app;
    }

    public static function self()
    {
        return self::$app->getContainer()->get(static::getFacadeAccessor());
    }

    protected static function getFacadeAccessor()
    {
        return '';
    }
}
