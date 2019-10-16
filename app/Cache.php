<?php

namespace App;

use Illuminate\Cache\FileStore;
use Illuminate\Filesystem\Filesystem;

class Cache
{
    protected $driver;
    protected $stores;

    public function __construct($cacheConfig)
    {
        $this->driver = $cacheConfig['default'];
        $this->stores = $cacheConfig['stores'];
    }

    public function init()
    {
        switch ($this->driver) {
            case 'file':
                return new FileStore(new Filesystem(), ($this->stores)[$this->driver]['path']);

                break;
            case '':
                break;
        }
    }
}
