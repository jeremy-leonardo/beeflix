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
                'genre_id' => 1,
                'title' => 'Itaewon Class',
                'photo' => '/photos/itaewon_class.jpg',
                'description' => 'The story of Park Sae Ro Yi who opens a restaurant in Itaewon.',
                'rating' => 4.1,
            ],
            [
                'genre_id' => 1,
                'title' => 'Fight for My Way',
                'photo' => '/photos/fight_for_my_way.jpg',
                'description' => 'Ko Dong Man, a high school Taekwondo champion who is now pursuing a career in the UFC, and Choi Ae Ra, a dynamic girl whose desire is to become a famous announcer, have been best friends since childhood. Now, they have to confront the change in their feelings towards each other as well as overcome difficulties to make their dreams come true.',
                'rating' => 4.0,
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
                'title' => 'Thomas & Friends',
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
                'genre_id' => 2,
                'title' => 'Dora the Explorer',
                'photo' => '/photos/bob_the_builder.jpg',
                'description' => 'Along with her friend Monkey Boots, Dora goes on adventures.',
                'rating' => 2.0,
            ],
            [
                'genre_id' => 3,
                'title' => 'Hunter X Hunter',
                'photo' => '/photos/hunter_x_hunter.jpg',
                'description' => 'Gon Freecss aspires to become a Hunter, an exceptional being capable of greatness. With his friends and his potential, he seeks for his father who left him when he was younger.',
                'rating' => 4.4,
            ],
            [
                'genre_id' => 3,
                'title' => 'Black Clover',
                'photo' => '/photos/black_clover.jpg',
                'description' => 'Asta and Yuno were abandoned together at the same church and have been inseparable since. As children, they promised that they would compete against each other to see who would become the next Emperor Magus.',
                'rating' => 4.0,
            ],
            [
                'genre_id' => 3,
                'title' => 'Demon Slayer',
                'photo' => '/photos/demon_slayer.jpg',
                'description' => 'A family is attacked by demons and only two members survive - Tanjiro and his sister Nezuko, who is turning into a demon slowly. Tanjiro sets out to become a demon slayer to avenge his family and cure his sister.',
                'rating' => 4.3,
            ],
            [
                'genre_id' => 3,
                'title' => 'Guilty Crown',
                'photo' => '/photos/guilty_crown.jpg',
                'description' => 'After the outbreak of the unidentified virus "Lost Christmas" in 2029, Japan has been under the control of a multi-nation organization called GHQ. Ohma Shu is a 17 year old boy who has a psychic power in his right hand. He can use the power "Ability of King" to extract tools or weapons from his friends. He has been avoiding making trouble for others but his life changes when he meets a girl Yuzuriha Inori, a member of a resistance guerrilla group called "Funeral Parlor", whose members pilot mecha weapons to fight against the government.',
                'rating' => 3.0,
            ],
            [
                'genre_id' => 3,
                'title' => 'Dr. Stone',
                'photo' => '/photos/dr_stone.jpg',
                'description' => 'One fateful day, all of humanity was petrified by a blinding flash of light. After several millennia, high schooler Taiju awakens and finds himself lost in a world of statues. However, he\'s not alone. His science-loving friend Senku\'s been up and running for a few months and he\'s got a grand plan in mind, to kickstart civilization with the power of science.',
                'rating' => 4.1,
            ],
        ]);
    }
}
