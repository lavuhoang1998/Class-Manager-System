<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Teacher extends Model
{
    use SoftDeletes;
    protected $table = 'teachers';
    protected $fillable = [
        'email',
        'name',
        'date_of_birth',
        'about_me',
        'avatar',
    ];

    public $timestamps = true;
}
