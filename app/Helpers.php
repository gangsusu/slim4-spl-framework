<?php

use App\ErrorCodes\ErrorCodes;
use Hprose\Http\Client;

function base_path($path = '')
{
    return __DIR__.($path ? '/../'.$path : $path);
}

function srv_doing($url, $method, $param)
{
    $client = new Client($url, false);

    return $client->{$method}($param);
}

function return_success($response, $msg, $data = [], $code = 200)
{
    return $response->withJson([
        'ret' => 0,
        'code' => $code,
        'msg' => $msg ? $msg : ErrorCodes::$codeMsg[$code],
        'data' => $data,
    ], $code);
}

function return_failed($response, $errMsg, $data = [], $code = 500)
{
    return $response->withJson([
        'ret' => -1,
        'code' => $code,
        'errMsg' => $errMsg ? $errMsg : ErrorCodes::$codeMsg[$code],
        'data' => $data,
    ], $code);
}

function Config($name)
{
    return \App\Facades\Config::get($name);
}
