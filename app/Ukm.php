<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    protected $table = 'ukm';
    protected $primaryKey='id_ukm';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable =[
    'id_ukm',
    'nama_ukm',
    'foto_ukm',
    ];
}
