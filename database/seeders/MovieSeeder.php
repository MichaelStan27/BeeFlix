<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            [
                'genre_id' => 3,
                'title' => 'Manifest S1',
                'photo' => 'Manifest.jpg',
                'description' => 'When a plane mysteriously lands years after takeoff, the people onboard return to a world that has moved on without them and face strange, new realities.',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 3,
                'title' => 'Bridgerton S1',
                'photo' => 'Bridgerton.jpg',
                'description' => 'The eight close-knit siblings of the Bridgerton family look for love and happiness in London high society. Inspired by Julia Quinn\'s bestselling novels.',
                'rating' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 3,
                'title' => 'Lucifer S6',
                'photo' => 'Lucifer.jpg',
                'description' => 'Bored with being the Lord of Hell, the devil relocates to Los Angeles, where he opens a nightclub and forms a connection with a homicide detective.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 3,
                'title' => 'Breaking Bad S1',
                'photo' => 'Breaking Bad.jpg',
                'description' => 'A high school chemistry teacher dying of cancer teams with a former student to secure his family\'s future by manufacturing and selling crystal meth.',
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 3,
                'title' => 'Suits S9',
                'photo' => 'Suits.jpg',
                'description' => 'When he impresses a big lawyer with his razor-sharp mind, a college dropout scores a coveted associate job, even though he has no legal credentials.',
                'rating' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 2,
                'title' => 'Masha and the Bear S3',
                'photo' => 'Masha and the Bear.jpg',
                'description' => 'Lively little Masha lives near the forest, where she has wonderful adventures with her best friend — a bear who used to be in the circus.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 2,
                'title' => 'Gabby\'s Dollhouse S4',
                'photo' => 'Gabby\'s Dollhouse.jpg',
                'description' => 'Cute cats, quirky crafts and colorful magic! Join kitty enthusiast Gabby and her sidekick Pandy Paws as they team up for a series of animated adventures.',
                'rating' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 2,
                'title' => 'Larva S3',
                'photo' => 'Larva.jpg',
                'description' => 'Two curious worms spend their days investigating the otherworldly objects that fall through the grate into their subterranean world.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 2,
                'title' => 'CoComelon S5',
                'photo' => 'CoComelon.jpg',
                'description' => 'Learn letters, numbers, animal sounds and more with J.J. in this musical series that brings fun times with nursery rhymes for the whole family!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 2,
                'title' => 'Battle Kitty',
                'photo' => 'Battle Kitty.jpg',
                'description' => 'Kitty and Orc brawl with monsters, beat out rivals — and need your help to move through Battle Island and become champion in this interactive adventure!',
                'rating' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 1,
                'title' => 'All of Us Are Dead',
                'photo' => 'All of Us Are Dead.jpg',
                'description' => 'A high school becomes ground zero for a zombie virus outbreak. Trapped students must fight their way out — or turn into one of the rabid infected.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 1,
                'title' => 'Squid Game',
                'photo' => 'Squid Game.jpg',
                'description' => 'Hundreds of cash-strapped players accept a strange invitation to compete in children\'s games. Inside, a tempting prize awaits — with deadly high stakes.',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 1,
                'title' => 'Crash Landing on You',
                'photo' => 'Crash Landing on You.jpg',
                'description' => 'A paragliding mishap drops a South Korean heiress in North Korea -- and into the life of an army officer, who decides he will help her hide.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 1,
                'title' => 'Partners for Justice S1',
                'photo' => 'Partners for Justice.jpg',
                'description' => 'To pin down criminals and solve cases, a grouchy but brilliant forensic doctor opens up his world to a bright-eyed rookie prosecutor.',
                'rating' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'genre_id' => 1,
                'title' => 'The Sound of Magic',
                'photo' => 'The Sound of Magic.jpg',
                'description' => 'A magician living in an abandoned theme park makes troubles disappear, and hope reappear, for a disenchanted teen enduring harsh realities.',
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
