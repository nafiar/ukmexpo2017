<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengumumanUkm extends Model
{
    protected $table = 'pengumuman_ukm';
    public $incrementing = false;
    protected $primaryKey='id_pengumuman';
    public $timestamps=false;
    protected $fillable =[
    'id_pengumuman',
    'isi_pengumuman',
    'id_ukm_pengumuman',
    'judul_pengumuman',
    ];
}
