<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\task\AddTaskRequest;
use App\Http\Requests\task\DelTaskRequest;
use App\Http\Requests\task\UpdateTaskRequest;
use App\Services\TaskService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TaskController extends Controller
{
    /**
     * 查看所有的T任务列表
     *
     */
    public function show(Request $request, Response $response)
    {
        $tasks = (New TaskService())->allTask();
        return return_success($response, 'success', $tasks);
    }

    /**
     * 根据用户id，查找该用户拥有的任务
     */
    public function getTasksByUser(Request $request, Response $response)
    {
        $data = $request->getParams();
        $tasks = (New TaskService())->getTasksByUser($data['userId']);
        return return_success($response, 'success', $tasks);
    }

    public function addTask(Request $request, Response $response)
    {
        $data = $request->getParams();
        $res = $valida = AddTaskRequest::check($data);
        if ($valida == 'ok') {
            $res = (New TaskService())->addTask($data);
        } else {
            return return_failed($response, 'failed', $res);
        }
        return return_success($response, 'success', ['id' => $res]);
    }

    public function delTask(Request $request, Response $response)
    {
        $data = $request->getParams();
        $res = $valida = DelTaskRequest::check($data);
        if ($valida == 'ok') {
            $res = (New TaskService())->delTask($data);
        } else {
            return return_failed($response, 'failed', $res);
        }
        return return_success($response, 'success', ['id' => $res]);
    }

    public function updateTask(Request $request, Response $response)
    {
        $data = $request->getParams();
        $res = $valida = UpdateTaskRequest::check($data);
        if ($valida == 'ok') {
            $res = (New TaskService())->updateTask($data);
        } else {
            return return_failed($response, 'failed', $res);
        }
        return return_success($response, 'success', ['id' => $res]);
    }
}