<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
   protected $table      = 'tbl_user';
   protected $primarykey = 'id_user';
   public $timestamp     = false;
   protected $fillable   = ['id_user','username','password','status','created_at','updated_at'];

}
