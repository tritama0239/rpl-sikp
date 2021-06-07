<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class batas_pelaksanaan extends Model
{
    protected $table="batas_pelaksanaan";
    protected $fillable = ['id', 'nim', 'name', 'pembimbing', 'penguji', 'jdwl_ujian', 'bts_pelaksanaan'];
}

