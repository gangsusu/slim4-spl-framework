<?php

namespace App\Services;

use Hprose\Http\Server;

class SrvService
{
    public function init()
    {
        $server = new Server();
        $server->addMethod('test', $this);
        $server->addMethod('demo1', $this);
        $server->addMethod('demo2', $this);
        $server->start();
    }

    public function test($request)
    {
        return 'hello' . $request['0'];
    }

    public function demo1($request)
    {
        return 'hello' . $request['0'];
    }

    public function demo2($request)
    {
        return 'hello' . $request['0'];
    }
}