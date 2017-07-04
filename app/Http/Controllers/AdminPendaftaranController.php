<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\FormPendaftaran;
use App\PenerimaanPendaftaran;
use App\MahasiswaBaru;
use App\Ukm;
use Uuid;
use Redirect;

class AdminPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftars = FormPendaftaran::where('id_ukm', session('user')['id_ukm_user'])->get();
        if($pendaftars){
            $data_pendaftar = array();
            foreach ($pendaftars as $key => $pendaftar) {
                $maba = MahasiswaBaru::where('nrp_maba', $pendaftar->nrp_maba)->first();
                $data_pendaftar[$pendaftar->nrp_maba] = ['nama_maba' => $maba->nama_maba, 'nomor' => $pendaftar->nomor_form,];
            }
        }
        $data['pendaftars'] = $pendaftars;
        $data['data_pendaftar'] = $data_pendaftar;
        return view('pendaftaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaftaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messagesError = [ 
            'nrp_maba.required' => 'NRP tidak boleh kosong.',
            'asal_form.required' => 'Kota Asal tidak boleh kosong.',
            'nomor_form.required' => 'Nomor HP tidak boleh kosong.',
            'id_line_form.required' => 'ID Line tidak boleh kosong.',
            ];

        $validator = Validator::make($request->all(), [ 
                'nrp_maba' => 'required',
                'asal_form' => 'required',
                'nomor_form' => 'required',
                'id_line_form' => 'required',    
            ], $messagesError);

        if($validator->fails()) 
        { 
            return Redirect::to($request->url())->withErrors($validator)->withInput();
        }
        else
        {
            $form_pendaftaran = new FormPendaftaran();
            $form_pendaftaran->id_form = Uuid::generate()->string;
            $form_pendaftaran->id_ukm = session('user')['id_ukm_user'];
            $form_pendaftaran->nrp_maba = $request->nrp_maba;
            $form_pendaftaran->asal_form = $request->asal_form;
            $form_pendaftaran->nomor_form = $request->nomor_form;
            $form_pendaftaran->id_line_form = $request->id_line_form;
            $form_pendaftaran->hobi_form = $request->hobi_form;
            $form_pendaftaran->motivasi_form = $request->motivasi_form;
            $form_pendaftaran->prestasi_form = $request->prestasi_form;
            $form_pendaftaran->kesibukan_form = $request->kesibukan_form;
            $form_pendaftaran->status_form = 0;
            if($form_pendaftaran->save())
                return Redirect::to(str_replace('/create', '', $request->url()))->with('message','Sukses menyimpan data Pendaftaran baru');
            else
                return Redirect::to(str_replace('/create', '', $request->url()))->withErrors('Gagal menyimpan data Pendaftaran Baru');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['pendaftaran'] = FormPendaftaran::where('nrp_maba', $id)->where('id_ukm', session('user')['id_ukm_user'])->first();
        return view('pendaftaran.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profilPendaftar($id)
    {
        $data['mahasiswa_baru'] = MahasiswaBaru::where('nrp_maba', $id)->first();
        $data['detail_mahasiswa'] = FormPendaftaran::where('nrp_maba', $id)->where('id_ukm', session('user')['id_ukm_user'])->first();
        $mendaftars = FormPendaftaran::where('nrp_maba', $id)->get();
        $diterimas = PenerimaanPendaftaran::where('nrp_maba', $id)->get();
        $mendaftar_ukm = array();
        $terdaftar_ukm = array();
        if($mendaftars){
            foreach ($mendaftars as $key => $mendaftar) {
                $ukm = Ukm::where('id_ukm', $mendaftar->id_ukm)->first();
                $temp = ['nama_ukm' => $ukm->nama_ukm, 'id_ukm' => $ukm->id_ukm];
                array_push($mendaftar_ukm, $temp);
                unset($temp);
                unset($ukm);
            }
        }
        if($diterimas){
            foreach ($diterimas as $key => $diterima) {
                $ukm = Ukm::where('id_ukm', $diterima->id_ukm)->first();
                $temp = ['nama_ukm' => $ukm->nama_ukm, 'id_ukm' => $ukm->id_ukm];
                array_push($terdaftar_ukm, $temp);
                unset($temp);
                unset($ukm);
            }
        }
        $data['mendaftars'] = $mendaftar_ukm;
        $data['diterimas'] = $terdaftar_ukm;
        //dd($data);
        return view('pendaftaran.showprofil', $data);
    }

    public function terimaPendaftaran($id){
        $form_pendaftaran = FormPendaftaran::where('id_form', $id)->first();
        $form_pendaftaran->status_form = 1;

        $penerimaan_pendaftaran = new PenerimaanPendaftaran();
        $penerimaan_pendaftaran->nrp_maba = $form_pendaftaran->nrp_maba;
        $penerimaan_pendaftaran->id_ukm = $form_pendaftaran->id_ukm;

        if($penerimaan_pendaftaran->save() && $form_pendaftaran->save()){
            return Redirect::to('/admin/pendaftaran')->with('message','Sukses menyimpan data Pendaftaran baru');
        }
        else{
            return Redirect::to('/admin/pendaftaran')->withErrors('Gagal menyimpan data Pendaftaran baru');
        }
    }

    public function pendaftarDiterima(){
        $diterimas = PenerimaanPendaftaran::where('id_ukm', session('user')['id_ukm_user'])->get();
        if($diterimas){
            $data_pendaftar = array();
            foreach ($diterimas as $key => $diterima) {
                $maba = MahasiswaBaru::where('nrp_maba', $diterima->nrp_maba)->first();
                $data_pendaftar[$diterima->nrp_maba] = ['nama_maba' => $maba->nama_maba, 'jurusan' => $maba->jurusan_maba,];
            }
        }
        $data['diterimas'] = $diterimas;
        $data['data_pendaftar'] = $data_pendaftar;
        return view('pendaftaran.diterima', $data);
    }
}
