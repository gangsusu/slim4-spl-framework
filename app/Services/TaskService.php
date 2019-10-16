<?php

namespace App\Services;

use App\Models\Enum\TaskEnum;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class TaskService
{
    public function allTask()
    {
        return Task::all();
    }

    public function getTasksByUser($userId)
    {
        return User::with('tasks')->where('id', $userId)->first()->tasks;
    }

    public function addTask($data)
    {
        $exists = Project::where('id', $data['projectId'])->exists();
        if (!$exists) {
            return '请选择正确的projectId';
        }

        return Task::insertGetId([
            'title' => $data['title'],
            'project_id' => $data['projectId'],
            'completed' => TaskEnum::un_completed,
        ]);
    }

    public function delTask($data)
    {
        $task = Task::find($data['taskId']);
        if (TaskEnum::un_completed === $task->completed) {
            return '该task还未完成，不可删除';
        }

        return Task::where('id', $data['taskId'])->delete();
    }

    public function updateTask($data)
    {
        $task = Task::find($data['taskId']);
        if ($task && TaskEnum::completed === $task->completed) {
            return '该task已经完成，不可修改';
        }

        return Task::where('id', $data['taskId'])->update(['title' => $data['title']]);
    }
}
