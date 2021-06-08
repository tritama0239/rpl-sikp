<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_bimbingan extends Model
{
    protected $table="daftar_bimbingan";
    protected $fillable = ['id', 'name', 'nim', 'pembimbing', 'judul_kp', 'jdwl_ujian'];
}