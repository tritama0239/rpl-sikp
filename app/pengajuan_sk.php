<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengajuan_sk extends Model
{
    protected $table="pengajuan_sk";
    protected $fillable = ['id', 'semester', 'tahun', 'nim', 'lembaga', 'no_tlp', 'alamat', 'fax', 'dokumen', 'sts_verif'];
}

