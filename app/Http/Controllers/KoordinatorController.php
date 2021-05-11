<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengajuan_sk;

class KoordinatorController extends Controller
{
    
    public function index()
    {
        return view('v_koordinator');
    }

    public function lihatsk()
    {
        $sk = pengajuan_sk::paginate(10);
        return view('v_lihat_pengajuan_sk', ['sk' => $sk]);
    }

    public function editsk($id) {
        $sk = pengajuan_sk::find($id);
        return view('v_verif_sk', ['sk' => $sk]);
    }

    public function updatesk($id, Request $request) {
        $sk = pengajuan_sk::find($id);
        $sk->id= $request->id;
        $sk->semester = $request->semester;
        $sk->tahun = $request->tahun;
        $sk->nim = $request->nim;
        $sk->lembaga = $request->lembaga;
        $sk->no_tlp = $request->no_tlp;
        $sk->alamat = $request->alamat;
        $sk->fax = $request->fax;
        $sk->dokumen = $request->dokumen;
        $sk->sts_verif = $request->sts_verif;
        $sk->save();
        
     return redirect("/koordinator");
    }

    public function searchsk(Request $request) {
        $cari = $request->q;
        $sk= pengajuan_sk::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_pengajuan_sk',['sk' => $sk]);
    }

}
