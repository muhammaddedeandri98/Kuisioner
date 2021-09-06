<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
   protected $table      = 'tbl_branch';
   protected $primarykey = 'id_branch';
   public $timestamp     = false;
   protected $fillable   = ['id_branch','code_branch','branch_name','created_at','updated_at'];
}
