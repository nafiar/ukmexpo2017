<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnggotaUkm;
use Redirect;

class AdminDaftarAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['anggotas'] = AnggotaUkm::where('id_ukm', session('user')['id_ukm_user'])->orderBy('hirarki_anggota','asc')->get();
        return view('daftar-anggota.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar-anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anggota_baru = new AnggotaUkm();
        $anggota_baru->id_ukm = session('user')['id_ukm_user'];
        $anggota_baru->nrp_anggota = $request->nrp_anggota;
        $anggota_baru->nama_anggota = $request->nama_anggota;
        $anggota_baru->jabatan_anggota = $request->jabatan_anggota;
        $anggota_baru->hirarki_anggota = $request->hirarki_anggota;
        
        if($anggota_baru->save())
            return Redirect::to(str_replace('/create', '', $request->url()))->with('message','Sukses menyimpan data Anggota baru');
        else
            return Redirect::to(str_replace('/create', '', $request->url()))->withErrors('Gagal menyimpan data Anggota Baru');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['anggota'] = AnggotaUkm::where('nrp_anggota', $id)->first();
        return view('daftar-anggota.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['anggota'] = AnggotaUkm::where('nrp_anggota', $id)->first();
        return view('daftar-anggota.edit', $data);
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
        $anggota = AnggotaUkm::where('nrp_anggota', $id)->first();
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->nrp_anggota = $request->nrp_anggota;
        $anggota->jabatan_anggota = $request->jabatan_anggota;
        $anggota->hirarki_anggota = $request->hirarki_anggota;
        if($anggota_baru->save())
            return Redirect::to(str_replace('/edit', '', $request->url()))->with('message','Sukses menyimpan data Anggota baru');
        else
            return Redirect::to(str_replace('/edit', '', $request->url()))->withErrors('Gagal menyimpan data Anggota Baru');
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
}
