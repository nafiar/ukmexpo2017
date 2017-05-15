<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MahasiswaBaru;
use App\AnggotaUkm;
use App\Ukm;
use Redirect;
use DB;

class UserController extends Controller
{
    public function index(Request $request){
    	if(session('ukm')){
            //dd(session('ukm'));
            $request->session()->flush();
            //dd(session('ukm'));
            return view('home');
        }
        else{
            return view('home');
        }
    }

    public function daftarUkm(){
    	$data['ukms'] = Ukm::get();
    	return view('daftar-ukm', $data);
    }

    public function carinrp(){
        return view('carinrp');
    }

    public function doPencarian(Request $request){
        $nrp = $request->nrp;
        $data['mahasiswa_baru'] = DB::table('mahasiswa_baru')->where('nrp_maba', $nrp)->first();
        $penerimaans = DB::table('penerimaan_pendaftaran')->where('nrp_maba', $nrp)->get();
        $dataUkm = array();
        if($penerimaans){
            foreach ($penerimaans as $key => $penerimaan) {
                $ukm = DB::table('ukm')->where('id_ukm', $penerimaan->id_ukm)->first();
                $id_ukm = $ukm->id_ukm;
                $nama_ukm = $ukm->nama_ukm;
                $coba = ['id_ukm' => $id_ukm,
                         'nama_ukm' => $nama_ukm];
                array_push($dataUkm, $coba);
                unset($ukm);
            }
        }
        $data['ukms'] = $dataUkm;
        //dd($data);
        return view('pengumuman', $data);
    }

    public function profilUkm($id_ukm, Request $request){
        if(session('ukm')['id_ukm'] == null){
            $ukm = Ukm::where('id_ukm',$id_ukm)->first();
            $dataUkm = array('id_ukm' => $ukm->id_ukm, 'nama_ukm' => $ukm->nama_ukm, 'foto_ukm' => $ukm->foto_ukm);
            $request->session()->put('ukm', $dataUkm);
            return view('profilukm');
        }
        else{
            return view('profilukm');
        } 
    }

    public function daftarAnggotaUkm(){
        if(!session('ukm')){
            return Redirect::to(url('/daftarukm'));
        }
        else{
            $data['anggotas'] = AnggotaUkm::where('id_ukm', session('ukm')['id_ukm'])->orderBy('hirarki_anggota','asc')->get();
            return view('daftar-anggota', $data); 
        }
    }
}
