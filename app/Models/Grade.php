<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use SoftDeletes;
    protected $table = 'grades';
    protected $fillable = [
        'name',
    ];
    public $timestamps = true;
}
