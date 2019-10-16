<?php

namespace App\Http\Requests\task;

use App\Http\Requests\BaseRequest;

class AddTaskRequest extends BaseRequest
{
    public static function check($data)
    {
        $rules = [
            'title' => 'required|string|min:2|max:8',
            'projectId' => 'required|int',
        ];
        $customAttributes = [
            'title' => '姓名',
            'projectId' => 'projectId',
        ];

        return parent::validate($rules, $customAttributes, $data);
    }
}
