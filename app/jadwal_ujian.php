<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_ujian extends Model
{
    protected $table="jadwal_ujian";
    protected $fillable = ['id', 'nama', 'nim', 'ruangan', 'pembimbing', 'penguji', 'jdwl_ujian', 'jam_mulai', 'jam_slsai'];
}