<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $table = 'students';
    protected $fillable = [
        'email',
        'name',
        'date_of_birth',
        'about_me',
        'avatar',
        'class_id'
    ];

    public $timestamps = true;
}
