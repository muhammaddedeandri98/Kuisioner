<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table      = 'tbl_question';
    protected $primarykey = 'id_question';
    public $timestamp     = false;
    protected $fillable   = ['id_question','id_subject','question','jenis','judul','created_at','updated_at'];
}
