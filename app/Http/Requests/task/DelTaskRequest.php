<?php

namespace App\Http\Requests\task;

use App\Http\Requests\BaseRequest;

class DelTaskRequest extends BaseRequest
{
    public static function check($data)
    {
        $rules = [
            'taskId' => 'required|int'
        ];
        $customAttributes = [
            'taskId' => 'taskId'
        ];
        return parent::validate($rules, $customAttributes, $data);
    }
}
