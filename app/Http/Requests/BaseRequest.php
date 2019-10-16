<?php

namespace App\Http\Requests;

use App\Common\Validator\Validator;

class BaseRequest
{
    public static function validate($rules, $customAttributes, $data)
    {
        if (!Validator::validators($rules, $data, [], $customAttributes)) {
            return Validator::getMessage()->toArray();
        }

        return 'ok';
    }
}
