<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','email','phone','service','created_at'];
}
