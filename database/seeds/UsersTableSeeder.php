<?php

use Illuminate\Database\Seeder;

use App\User;

use Faker\Factory;

use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
		$faker = Factory::create();

		//disable foreign key check for this connection before running seeders		
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');		
		User::truncate();
        
	    foreach(range(1, 3) as $i) 
	    {
		    User::create([
		     'name' => $faker->name,
		     'email' => $faker->unique()->email,
		     'email_verified_at' => now(),
		     'password' => bcrypt('password'),
		     'remember_token' => Str::random(10),
		   ]);
    	}
    	
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');    	
    }
}
