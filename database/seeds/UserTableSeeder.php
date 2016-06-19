<?php

use Illuminate\Database\Seeder;	

class UserTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('users')->delete();

    	App\User::create([
    		'name' => 'Edgar Sandoval',
    		'email' => 'edgar@panda.com',
    		'password' => Hash::make('1234'),
    		]);
    }
}