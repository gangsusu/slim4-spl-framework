<?php

namespace App\Http\Requests\task;

use App\Http\Requests\BaseRequest;

class UpdateTaskRequest extends BaseRequest
{
    public static function check($data)
    {
        $rules = [
            'title' => 'required|string|min:2|max:8',
            'taskId' => 'required|int',
        ];
        $customAttributes = [
            'title' => 'required|string|min:2|max:8',
            'taskId' => 'taskId',
        ];

        return parent::validate($rules, $customAttributes, $data);
    }
}
