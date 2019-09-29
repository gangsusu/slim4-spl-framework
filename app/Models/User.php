<?php

namespace App\Models;

class User extends BaseModel
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

    public function tasks()
    {
        return $this->hasManyThrough('App\Models\Task', 'App\Models\Project');
    }
}