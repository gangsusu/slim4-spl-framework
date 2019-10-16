<?php

namespace App\Models;

class Task extends BaseModel
{
    public $timestamps = false;
    protected $table = 'tasks';
    protected $primaryKey = 'id';

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }
}
