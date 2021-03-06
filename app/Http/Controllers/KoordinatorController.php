<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengajuan_sk;
use App\pengajuan_prakp;
use App\pengajuan_kp;
use App\jadwal_ujian;
use App\list_registrasi;
use App\batas_pelaksanaan;

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
        
     return redirect("/koordinator/pengajuan_sk/lihatsk");
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
        $prakp->sts_prakp = $request->sts_prakp;
        $prakp->penguji = $request->penguji;
        $prakp->sts_verif = $request->sts_verif;
        $prakp->save();
        
    return redirect("/koordinator/pengajuan_prakp/lihatprakp");
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
        $kp->sts_kp = $request->sts_kp;
        $kp->penguji = $request->penguji;
        $kp->sts_ujian = $request->sts_ujian;
        $kp->sts_verif = $request->sts_verif;
        $kp->save();
        
    return redirect("/koordinator/pengajuan_kp/lihatkp");
    }

    public function searchkp(Request $request) {
        $cari = $request->q;
        $kp= pengajuan_kp::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_pengajuan_kp',['kp' => $kp]);
    }

    //============================================================//

    public function lihatjdwl()
    {
        $jdwl = jadwal_ujian::paginate(10);
        return view('v_lihat_jdwl_koor', ['jdwl' => $jdwl]);
    }

    public function searchjdwl(Request $request) {
        $cari = $request->q;
        $jdwl= jadwal_ujian::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_jdwl_koor',['jdwl' => $jdwl]);
    }

    public function tambahjdwl()
    {
        return view('v_set_jdwl_ujian');
    }

    public function simpanjdwl(Request $request)
    {
        jadwal_ujian::create([
            'id' => $request -> id,
            'name' => $request -> name,
            'nim' => $request -> nim,
            'ruang' => $request -> ruang,
            'pembimbing' => $request -> pembimbing,
            'penguji' => $request -> penguji,
            'jdwl_ujian' => $request -> jdwl_ujian,
            'jam_mulai' => $request -> jam_mulai,
            'jam_slsai' => $request -> jam_slsai
            
        ]);
        return redirect('/koordinator/jadwal_ujian/lihatjdwl');
    }

    public function editjdwl($id) {
        $jdwl = jadwal_ujian::find($id);
        return view('v_edit_jdwl', ['jdwl' => $jdwl]);
    }

    public function updatejdwl($id, Request $request) {
        $jdwl = jadwal_ujian::find($id);
        $jdwl->ruang = $request->ruang;
        $jdwl->jdwl_ujian = $request->jdwl_ujian;
        $jdwl->jam_mulai = $request->jam_mulai;
        $jdwl->jam_slsai = $request->jam_slsai;
        $jdwl->save();
        
     return redirect("/koordinator/jadwal_ujian/lihatjdwl");
    }

    //============================================================//

    public function lihatregis()
        {
            $reg = list_registrasi::paginate(10);
            return view('v_lihat_regis', ['reg' => $reg]);
        }

    public function searchregis(Request $request) {
        $cari = $request->q;
        $reg= list_registrasi::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_regis',['reg' => $reg]);
    }

    //============================================================//

    public function lihatbatas()
    {
        $batas = batas_pelaksanaan::paginate(10);
        return view('v_lihat_batas_pelaksanaan', ['batas' => $batas]);
    }

    public function searchbatas(Request $request) {
        $cari = $request->q;
        $batas= batas_pelaksanaan::
        where('nim','like',"%".$cari."%")
        ->paginate();
        return view('v_lihat_batas_pelaksanaan',['batas' => $batas]);
    }

    public function editbatas($id) {
        $batas = pengajuan_kp::find($id);
        return view('v_set_batas_pelaksanaan', ['batas' => $batas]);
    }

    public function updatebatas($id, Request $request) {
        $batas = pengajuan_kp::find($id);
        $batas->bts_pelaksanaan = $request->bts_pelaksanaan;
        $batas->save();
        
     return redirect("/koordinator/batas_pelaksanaan/lihatbatas");
    }

    //============================================================//

    public function opendokumen($dokumen)
    {
        $path = public_path('dokumen/' . $dokumen );
        header("Content-type: application/pdf");
        header("Content-Length: " . filesize($path));
        readfile($path);
    }

}