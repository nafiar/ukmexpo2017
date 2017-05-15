<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerimaanPendaftaran extends Model
{
    protected $table = 'penerimaan_pendaftaran';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable =[
    'keterangan_pendaftaran',
    'nrp_maba',
    'id_ukm',
    ];
}
