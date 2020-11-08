<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genre_id' => 1,
                'title' => 'The World Of The Married',
                'photo' => '/photos/the_world_of_the_married.jpg',
                'description' => 'A story about a married couple whose betrayal of one another leads to a whirlwind of revenge.',
                'rating' => 4.0,
            ],
            [
                'genre_id' => 1,
                'title' => 'Boys Over Flowers',
                'photo' => '/photos/boys_over_flowers.jpg',
                'description' => 'Poor girl attends the elite Shin Hwa High and is bullied by the leader of F4 (the four richest boys). He becomes attracted to her; however, she has a crush on his best friend. Whom will she choose?',
                'rating' => 3.4,
            ],
            [
                'genre_id' => 1,
                'title' => 'Desendants of The Sun',
                'photo' => '/photos/descendants_of_the_sun.jpg',
                'description' => 'This drama tells of the love story that develops between a surgeon and a special forces officer.',
                'rating' => 4.1,
            ],
            [
                'genre_id' => 1,
                'title' => 'Crash Landing on You',
                'photo' => '/photos/crash_landing_on_you.jpg',
                'description' => 'The absolute top secret love story of a chaebol heiress who made an emergency landing in North Korea because of a paragliding accident and a North Korean special officer who falls in love with her and who is hiding and protecting her.',
                'rating' => 4.4,
            ],
            [
                'genre_id' => 2,
                'title' => 'Let\'s Go, Pocoyo',
                'photo' => '/photos/lets_go_pocoyo.jpg',
                'description' => 'Pocoyo, the curious toddler dressed all in blue, joins Pato the yellow duck, Elly the pink elephant, Loula the dog, Sleepy Bird and many others in learning new things and having fun.',
                'rating' => 3.2,
            ],
            [
                'genre_id' => 2,
                'title' => 'Upin & Ipin',
                'photo' => '/photos/upin_ipin.jpg',
                'description' => 'Upin and Ipin the twin who live at kampung durian runtuh. Watch their live with their friend and family in a happy village.',
                'rating' => 2.2,
            ],
            [
                'genre_id' => 2,
                'title' => 'Thomas & Friends ',
                'photo' => '/photos/thomas_friends.jpg',
                'description' => 'This series follows the adventures of Thomas the Tank Engine and all of his engine friends on the Island of Sodor.',
                'rating' => 3.3,
            ],
            [
                'genre_id' => 2,
                'title' => 'Bob the Builder',
                'photo' => '/photos/bob_the_builder.jpg',
                'description' => 'Bob the Builder and his machine team are ready to tackle any project. Bob and the Can-Do Crew demonstrate the power of positive thinking, problem-solving, teamwork, and follow-through. The team always shows that "The Fun Is In Getting It Done!" Bob the Builder can be seen building, digging, and hauling.',
                'rating' => 4.4,
            ],
            [
                'genre_id' => 3,
                'title' => 'Let\'s Go, Pocoyo',
                'photo' => '/photos/lets_go_pocoyo.jpg',
                'description' => 'Pocoyo, the curious toddler dressed all in blue, joins Pato the yellow duck, Elly the pink elephant, Loula the dog, Sleepy Bird and many others in learning new things and having fun.',
                'rating' => 3.3,
            ],
            [
                'genre_id' => 3,
                'title' => 'Upin & Ipin',
                'photo' => '/photos/upin_ipin.jpg',
                'description' => 'Upin and Ipin the twin who live at kampung durian runtuh. Watch their live with their friend and family in a happy village.',
                'rating' => 3.3,
            ],
            [
                'genre_id' => 3,
                'title' => 'Thomas & Friends ',
                'photo' => '/photos/thomas_friends.jpg',
                'description' => 'This series follows the adventures of Thomas the Tank Engine and all of his engine friends on the Island of Sodor.',
                'rating' => 3.3,
            ],
            [
                'genre_id' => 3,
                'title' => 'Bob the Builder',
                'photo' => '/photos/bob_the_builder.jpg',
                'description' => 'Bob the Builder and his machine team are ready to tackle any project. Bob and the Can-Do Crew demonstrate the power of positive thinking, problem-solving, teamwork, and follow-through. The team always shows that "The Fun Is In Getting It Done!" Bob the Builder can be seen building, digging, and hauling.',
                'rating' => 4.4,
            ],
        ]);
    }
}
