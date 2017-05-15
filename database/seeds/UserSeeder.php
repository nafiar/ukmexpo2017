<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
       	$user->username = 'admin';
       	$user->password = bcrypt('admin');
       	$user->role = 1;
       	$user->id_ukm_user = '8a323b52-383a-11e7-acec-00ff44baa71c';
       	$user->save();
    }
}
