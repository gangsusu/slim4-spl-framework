<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


class WelcomeController extends Controller
{

    public function index(Request $request, Response $response)
    {
        return return_success($response, 'success', 'hello world');
    }

    public function demo1(Request $request, Response $response)
    {
        $res = srv_doing('http://larasrv.test/api/service', 'demo1', ['demo111']);
        return return_success($response, 'success', $res);
    }

    public function demo2(Request $request, Response $response)
    {
        $res = srv_doing('http://larasrv.test/api/service1', 'demo2', ['demo222']);
        return return_success($response, 'success', $res);
    }
}