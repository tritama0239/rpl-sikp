<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengajuan_sk;
use App\pengajuan_prakp;
use App\pengajuan_kp;


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

    public function tambah1()
    {
        return view('v_pengajuan_prakp');
    }

    public function simpan1(Request $request)
    {
        pengajuan_prakp::create([
            'id' => $request -> id,
            'semester' => $request -> semester,
            'tahun' => $request -> tahun,
            'sts_prakp' => $request -> sts_prakp,
            'nim' => $request -> nim,
            'nik' => $request -> nik,
            'tools' => $request -> tools,
            'spesifikasi' => $request -> spesifikasi,
            'dokumen' => $request -> dokumen,
            'penguji' => $request -> penguji,
            'ruang' => $request -> ruang,
            'lembaga' => $request -> lembaga,
            'pimpinan' => $request -> pimpinan,
            'alamat' => $request -> alamat,
            'no_tlp' => $request -> no_tlp,
            'sts_verif' => $request -> sts_verif
        ]);
        return redirect('/mahasiswa');
    }

    public function tambah2()
    {
        return view('v_pengajuan_kp');
    }

    public function simpan2(Request $request)
    {
        pengajuan_kp::create([
            'id' => $request -> id,
            'semester' => $request -> semester,
            'tahun' => $request -> tahun,
            'judul_kp' => $request -> judul_kp,
            'sts_kp' => $request -> sts_kp,
            'nim' => $request -> nim,
            'nik' => $request -> nik,
            'tools' => $request -> tools,
            'spesifikasi' => $request -> spesifikasi,
            'dokumen' => $request -> dokumen,
            'penguji' => $request -> penguji,
            'ruang' => $request -> ruang,
            'lembaga' => $request -> lembaga,
            'pimpinan' => $request -> pimpinan,
            'alamat' => $request -> alamat,
            'no_tlp' => $request -> no_tlp,
            'sts_ujian' => $request -> sts_ujian,
            'jdwl_ujian' => $request -> jdwl_ujian,
            'sts_verif' => $request -> sts_verif
        ]);
        return redirect('/mahasiswa');
    }
}
