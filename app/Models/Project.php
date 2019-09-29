<?php

namespace App\Models;

class Project extends BaseModel
{
    protected $table = 'projects';
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }
}
