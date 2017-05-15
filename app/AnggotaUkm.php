<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaUkm extends Model
{
    protected $table = 'anggota_ukm';
    protected $primaryKey='nrp_anggota';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable =[
    'nrp_anggota',
    'id_ukm',
    'nama_anggota',
    'jabatan_anggota',
   	'hirarki_anggota',
    ];
}
