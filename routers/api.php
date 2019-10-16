<?php

use App\Facades\Route;
use Psr\Http\Message\ServerRequestInterface as Request;

Route::post('/api/service', function (Request $request) {
    $server = new \App\Services\SrvService();
    $server->init();
});

Route::post('/api/service1', function (Request $request) {
    $server = new \App\Services\DemoService();
    $server->init();
});

Route::get('/tasks', '\App\Http\Controllers\Api\TaskController:show');
Route::get('/tasks/getTasksByUser', '\App\Http\Controllers\Api\TaskController:getTasksByUser');
Route::post('/tasks/addTask', '\App\Http\Controllers\Api\TaskController:addTask');
Route::post('/tasks/delTask', '\App\Http\Controllers\Api\TaskController:delTask');
Route::post('/tasks/updateTask', '\App\Http\Controllers\Api\TaskController:updateTask');
