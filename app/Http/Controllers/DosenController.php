<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal_ujian;
use App\daftar_bimbingan;

class DosenController extends Controller
{
    
    public function index()
    {
        return view('v_dosen');
    }

    public function lihatjdwl()
    {
        $jdwl = jadwal_ujian::paginate(10);
        return view('v_lihat_jdwl_dsn', ['jdwl' => $jdwl]);
    }

    public function lihatbimbingan()
    {
        $bim = daftar_bimbingan::paginate(10);
        return view('v_lihat_bimbingan', ['bim' => $bim]);
    }
}
