<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array (
			'name' => 'Raul',
			'email' => 'raul@raul.com',
			'password' => \Hash::make('111111'),
			'telefono' => '2821081490',
			'direccion' => 'Av. Rebsamen 4',
			'tipo' => 'cliente'
		));
	}
	

}
