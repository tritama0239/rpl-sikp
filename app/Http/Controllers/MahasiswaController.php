<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengajuan_sk;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('v_mahasiswa');
    }

    public function tambah()
    {
        return view('v_pengajuan_sk');
    }

    public function simpan(Request $request)
    {
        pengajuan_sk::create([
            'id' => $request -> id,
            'semester' => $request -> semester,
            'tahun' => $request -> tahun,
            'nim' => $request -> nim,
            'lembaga' => $request -> lembaga,
            'no_tlp' => $request -> no_tlp,
            'alamat' => $request -> alamat,
            'fax' => $request -> fax,
            'dokumen' => $request -> dokumen,
            'sts_verif' => $request -> sts_verif
        ]);
        return redirect('/mahasiswa');
    }

    public function pengajuanprakp()
    {
        return view('v_pengajuan_prakp');
    }

    public function pengajuankp()
    {
        return view('v_pengajuan_kp');
    }
}
