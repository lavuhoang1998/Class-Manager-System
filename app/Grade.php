<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grades';

    public function classs()
    {
        return $this->hasMany('App\Classs', 'grade_id', 'grade_id');
    }


    public function student()
    {
        return $this->hasManyThrough('App\Student', 'App\Classs', 'grade_id', 'class_id', 'grade_id');
    }
}
