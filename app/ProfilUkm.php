<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilUkm extends Model
{
    protected $table = 'profil_ukm';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable =[
    'id_profil',
    'isi_profil',
    'id_ukm_profil',
    ];
}
