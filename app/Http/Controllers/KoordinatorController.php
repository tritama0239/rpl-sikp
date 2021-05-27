<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengajuan_sk;
use App\pengajuan_prakp;
use App\pengajuan_kp;

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

    //============================================================//

    public function lihatprakp()
    {
        $prakp = pengajuan_prakp::paginate(10);
        return view('v_lihat_pengajuan_prakp', ['prakp' => $prakp]);
    }

    public function editprakp($id) {
        $prakp = pengajuan_prakp::find($id);
        return view('v_verif_prakp', ['prakp' => $prakp]);
    }

    public function updateprakp($id, Request $request) {
        $prakp = pengajuan_prakp::find($id);
        $prakp->sts_verif = $request->sts_verif;
        $prakp->save();
        
    return redirect("/koordinator");
    }

    public function searchprakp(Request $request) {
        $cari = $request->q;
        $prakp= pengajuan_prakp::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_pengajuan_prakp',['prakp' => $prakp]);
    }
    
    //============================================================//

    public function lihatkp()
    {
        $kp = pengajuan_kp::paginate(10);
        return view('v_lihat_pengajuan_kp', ['kp' => $kp]);
    }

    public function editkp($id) {
        $kp = pengajuan_kp::find($id);
        return view('v_verif_kp', ['kp' => $kp]);
    }

    public function updatekp($id, Request $request) {
        $kp = pengajuan_kp::find($id);
        $kp->sts_verif = $request->sts_verif;
        $kp->save();
        
    return redirect("/koordinator");
    }

    public function searchkp(Request $request) {
        $cari = $request->q;
        $kp= pengajuan_kp::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_pengajuan_kp',['kp' => $kp]);
    }

}
