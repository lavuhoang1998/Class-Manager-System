<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function Student()
    {
        return $this->belongsTo('App\Classs', 'class_id', 'class_id');
    }
}
