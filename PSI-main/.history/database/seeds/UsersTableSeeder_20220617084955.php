<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		DB::table('users')->truncate();
		DB::table('users')->insert(
		    array(
		    	'full_name' 		=>	$faker->name,
		    	'email' 			=> 	'test@psi.com',
		    	'password'			=>	Hash::make('secret'),
				'role'				=>  'user',
		    	'tasks_created' 	=> 	1,
			),
			array(
				'full_name'			=> 'admin',
				'email'				=> 'admin@psi.com',
				'password'			=> Hash::make('admin'),
				'role'				=> 'admin',
				)
		);
		DB::table('users')->insert(
			array(
				'full_name'			=> 'admin',
				'email'				=> 'admin@psi.com',
				'password'			=> Hash::make('admin'),
				'role'				=> 'admin',
				)
		);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
