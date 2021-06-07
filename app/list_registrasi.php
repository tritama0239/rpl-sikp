<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_registrasi extends Model
{
    protected $table="list_registrasi";
    protected $fillable = ['name', 'nim', 'sts_prakp', 'sts_kp'];
}