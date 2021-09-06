<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisUser extends Model
{
    protected $table      = 'tbl_jenis_user';
    protected $primarykey = 'id_jenis_user';
    public $timestamp     = false;
    protected $fillable   = ['id_jenis_user','jenis_user','created_at','updated_at'];
    
}
