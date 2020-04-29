<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    protected $table = 'teachers';

    public function Teacher()
    {
        return $this->belongsTo('App\Classs', 'class_id', 'class_id');
    }
}
