<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
            [
                'name' => 'Drama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kids',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TV Show',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
