<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_ujian extends Model
{
    protected $table="jadwal_ujian";
    protected $fillable = ['id', 'name', 'nim', 'ruang', 'pembimbing', 'penguji', 'jdwl_ujian', 'jam_mulai', 'jam_slsai'];
}