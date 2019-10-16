<?php

namespace App\Http\Controllers;

use Psr\Container\ContainerInterface;

abstract class Controller
{
    protected $ci;

    public function __construct(ContainerInterface $ci)
    {
        $this->ci = $ci;
    }
}
