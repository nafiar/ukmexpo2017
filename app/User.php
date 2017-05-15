<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $primaryKey='username';
    public $incrementing = false;
    public $timestamps=false;
    protected $fillable =[
    'username',
    'password',
    'role',
    'id_ukm_user',
    ];



}
