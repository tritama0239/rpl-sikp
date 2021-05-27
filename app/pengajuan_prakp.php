<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_prakp extends Model
{
    protected $table="pengajuan_prakp";
    protected $fillable = ['id', 'semester', 'tahun', 'sts_prakp', 'nim', 'nik', 'tools', 'spesifikasi', 'dokumen', 'penguji', 'ruang', 'lembaga', 'pimpinan', 
    'alamat', 'no_tlp', 'sts_verif'];
}

