<?php

namespace App\Models;

class Task extends BaseModel
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
