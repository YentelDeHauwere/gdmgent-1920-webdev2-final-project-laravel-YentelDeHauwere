<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker=Faker\Factory::create();
		
		for($i=1; $i<20; $i++){
			DB::table('blogs')->insert([
				'id'=>$i,
				'image'=>$faker->imageUrl($width = 250, $height = 325, 'nature') ,
				'title'=>$faker->sentence(6),
				'slug'=>'slug',
				'intro'=>$faker->sentence(15),
				'content'=>$faker->sentence(200),
				'active'=>'1',
				'created_at'=>Carbon\Carbon::now()
			]);
		}
		
    }
}