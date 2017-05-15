<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MahasiswaBaru extends Model
{
    protected $table = 'mahasiswa_baru';
    protected $primaryKey='nrp_maba';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable =[
    'nrp_maba',
    'nama_maba',
    'jurusan_maba',
    ];
}
