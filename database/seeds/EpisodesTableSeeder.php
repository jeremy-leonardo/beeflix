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
            for($i = 1; $i <= 42; $i++){
                DB::table('episodes')->insert([
                    'movie_id' => $mov_id,
                    'episode' => $i,
                    'title' => $faker->text(10),
                ]);
            }
    	}

        // DB::table('episodes')->insert([
        //     [
        //         'movie_id' => 1,
        //         'episode' => 1,
        //         'title' => 'Affair',
        //     ],
        //     [
        //         'movie_id' => 1,
        //         'episode' => 2,
        //         'title' => 'Starting Point',
        //     ],
        //     [
        //         'movie_id' => 1,
        //         'episode' => 3,
        //         'title' => 'Execution',
        //     ],
        //     [
        //         'movie_id' => 2,
        //         'episode' => 1,
        //         'title' => 'National Attention',
        //     ],
        //     [
        //         'movie_id' => 2,
        //         'episode' => 2,
        //         'title' => 'Defiance',
        //     ],
        //     [
        //         'movie_id' => 2,
        //         'episode' => 3,
        //         'title' => 'Mean Girls Trio',
        //     ],
        //     [
        //         'movie_id' => 3,
        //         'episode' => 1,
        //         'title' => 'Military Operation',
        //     ],
        //     [
        //         'movie_id' => 3,
        //         'episode' => 2,
        //         'title' => 'Back Home',
        //     ],
        //     [
        //         'movie_id' => 3,
        //         'episode' => 3,
        //         'title' => 'Join',
        //     ],
        //     [
        //         'movie_id' => 4,
        //         'episode' => 1,
        //         'title' => 'Military Operation',
        //     ],
        //     [
        //         'movie_id' => 4,
        //         'episode' => 2,
        //         'title' => 'Back Home',
        //     ],
        //     [
        //         'movie_id' => 4,
        //         'episode' => 3,
        //         'title' => 'Join',
        //     ],

        //     [
        //         'movie_id' => 8,
        //         'episode' => 1,
        //         'title' => 'Scoop Saves the Day',
        //     ],
        //     [
        //         'movie_id' => 8,
        //         'episode' => 2,
        //         'title' => 'Travis Paints the Town',
        //     ],
        //     [
        //         'movie_id' => 8,
        //         'episode' => 3,
        //         'title' => 'Bob Saves the Hedgehogs',
        //     ],
        // ]);
    }
}
