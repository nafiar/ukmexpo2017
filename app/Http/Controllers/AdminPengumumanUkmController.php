<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\PengumumanUkm;
use Redirect;
use Uuid;

class AdminPengumumanUkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pengumuman'] = PengumumanUkm::where('id_ukm_pengumuman', session('user')['id_ukm_user'])->first();
        if(!$data['pengumuman']){
            return view('pengumumanukm.index2');
        }
        else
            return view('pengumumanukm.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengumumanukm.create');
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
            'judul_pengumuman.required' => 'Judul tidak boleh kosong.',
            ];

        $validator = Validator::make($request->all(), [ 
                'judul_pengumuman' => 'required',    
            ], $messagesError);

        if($validator->fails()) 
        { 
            return Redirect::to($request->url())->withErrors($validator)->withInput();
        }
        else
        {
            $pengumumanBaru = new PengumumanUkm();
            $pengumumanBaru->id_pengumuman = Uuid::generate()->string;
            $pengumumanBaru->judul_pengumuman = $request->judul_pengumuman;
            $pengumumanBaru->id_ukm_pengumuman = session('user')['id_ukm_user'];
            $pengumumanBaru->isi_pengumuman = $request->isi_pengumuman;
            if($pengumumanBaru->save())
                return Redirect::to(str_replace('/create', '', $request->url()))->with('message','Sukses menyimpan data Pengumuman baru');
            else
                return Redirect::to(str_replace('/create', '', $request->url()))->withErrors('Gagal menyimpan data Pengumuman Baru');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['pengumuman'] = PengumumanUkm::where('id_ukm_pengumuman', session('user')['id_ukm_user'])->first();
        return view('pengumumanukm.edit', $data);
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
        //dd($request);
        $messagesError = [ 
            'judul_pengumuman.required' => 'Judul tidak boleh kosong.',
            'isi_pengumuman.required' => 'Isi tidak boleh kosong.',
            ];

        $validator = Validator::make($request->all(), [ 
                'judul_pengumuman' => 'required',
                'isi_pengumuman' => 'required',    
            ], $messagesError);

        if($validator->fails()) 
        { 
            return Redirect::to($request->url())->withErrors($validator)->withInput();
        }
        else
        {
            //dd($request);
            $pengumuman = PengumumanUkm::where('id_ukm_pengumuman', session('user')['id_ukm_user'])->first();
            $pengumuman->judul_pengumuman = $request->judul_pengumuman;
            $pengumuman->isi_pengumuman = $request->isi_pengumuman;
            //dd($prngumuman);
            if($pengumuman->save())
                return Redirect::to(url('/admin/pengumumanukm'))->with('message','Sukses menyimpan data Pengumuman baru');
            else
                return Redirect::to(url('/admin/pengumumanukm'))->withErrors('Gagal menyimpan data Pengumuman Baru');
        }
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
