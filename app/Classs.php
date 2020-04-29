<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    protected $table = 'classes';

    public function grade()
    {
        return $this->belongsTo('App\Grade', 'grade_id', 'grade_id');
    }

    public function student()
    {
        return $this->hasMany('App\Student', 'class_id', 'class_id');
    }

    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
}
