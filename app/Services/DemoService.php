<?php

namespace App\Services;

use Hprose\Http\Server;

class DemoService
{
    public function init()
    {
        $server = new Server();
        $server->addMethod('demo2', $this);
        $server->start();
    }

    public function demo2($request)
    {
        return 'hello' . $request['0'];
    }
}