<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table      = 'tbl_divisi';
    protected $primarykey = 'id_divisi';
    public $timestamp     = false;
    protected $fillable   = ['id_divisi','nama_divisi','created_at','updated_at'];
}
