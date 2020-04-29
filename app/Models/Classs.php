<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use SoftDeletes;
    protected $table = 'classes';
    protected $fillable = [
        'name',
        'grade_id'
    ];
}
