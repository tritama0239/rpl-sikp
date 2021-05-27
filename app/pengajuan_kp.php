<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_kp extends Model
{
    protected $table="pengajuan_kp";
    protected $fillable = ['id', 'semester', 'tahun', 'judul_kp', 'sts_kp', 'nim', 'nik', 'tools', 'spesifikasi', 'dokumen', 'penguji', 'ruang', 'lembaga', 'pimpinan', 
    'alamat', 'no_tlp', 'sts_ujian', 'jdwl_ujian', 'sts_verif'];
}

