<?php

use Illuminate\Database\Seeder;

use App\Tag;

use Faker\Factory;

use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
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
		Tag::truncate();
        
	    foreach(range(1, 3) as $i) 
	    {
		    Tag::create([
		     'name' => $faker->word,
		   ]);
    	}
    	
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');    	
    }
}
