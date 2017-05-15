<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPendaftaran extends Model
{
    protected $table = 'form_pendaftaran';
    protected $primaryKey='id_form';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable =[
    'id_form',
    'id_ukm',
    'nrp_maba',
    'asal_form',
    'nomor_form',
   	'id_line_form',
   	'hobi_form',
   	'motivasi_form',
   	'prestasi_form',
   	'kesibukan_form',
   	'status_form',
    ];
}
