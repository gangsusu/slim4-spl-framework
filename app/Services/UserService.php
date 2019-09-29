<?php

namespace App\Services;

use App\Models\Enum\UserEnum;
use App\Models\User;

class UserService
{
    public function getUser($request)
    {
        $user = User::where('name', $request['name'])->first()->toArray();
        $user['status_desc'] = UserEnum::getStatusName($user['status']);
        return $user;
    }
}