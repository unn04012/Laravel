<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author2 extends Model
{
    public $timestamps = false;
    protected $fillable = ['email','password'];
}
