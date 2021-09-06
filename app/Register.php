<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table      = 'users';
    protected $primarykey = 'id';
    public $timestamp     = false;
    protected $fillable   = ['id','name','email','password','level','remember_token','created_at','updated_at'];
}
