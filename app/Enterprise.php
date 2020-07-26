<?php

namespace App;

use App\Project;


use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
