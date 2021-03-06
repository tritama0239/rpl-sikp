<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal_ujian;
use App\daftar_bimbingan;
use App\pengajuan_kp;

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

    public function searchjdwl(Request $request) {
        $cari = $request->q;
        $jdwl= jadwal_ujian::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_jdwl_dsn',['jdwl' => $jdwl]);
    }

    public function searchbimbingan(Request $request) {
        $cari = $request->q;
        $bim= jadwal_ujian::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_bimbingan',['bim' => $bim]);
    }

    public function editbim($id) {
        $bim = jadwal_ujian::find($id);
        return view('v_ajukan_jdwl_dsn', ['bim' => $bim]);
    }

    public function updatebim($id, Request $request) {
        $bim = jadwal_ujian::find($id);
        $bim->jdwl_ujian = $request->jdwl_ujian;
        $bim->save();
        
     return redirect("/dosen/daftar_bimbingan/lihatbimbingan");
    }
}
