<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
 
        
        for($mov_id = 1; $mov_id <= 12; $mov_id++){
            for($i = 1; $i <= 9; $i++){
                DB::table('episodes')->insert([
                    'movie_id' => $mov_id,
                    'episode' => $i,
                    'title' => $faker->text(10),
                ]);
            }
    	}

    }
}
