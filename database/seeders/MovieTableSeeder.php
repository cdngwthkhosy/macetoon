<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'Harry Potter: The Deadly Hallows',
                'slug' => 'harry-potter-the-deadly-hallows',
                'category' => 'Fantasy',
                'video_url' => 'https://www.youtube.com/watch?v=2Tpb1XyqGOQ',
                'thumbnail' => 'https://img.youtube.com/vi/2Tpb1XyqGOQ/sddefault.jpg',
                'rating' => 4.7,
                'is_featured' => true
            ],[
                'name' => 'Harry Potter: The Chamber of Secrets',
                'slug' => 'harry-potter-the-chamber-of-secrets',
                'category' => 'Fantasy',
                'video_url' => 'https://www.youtube.com/watch?v=QSiynI-fjYE',
                'thumbnail' => 'https://img.youtube.com/vi/2Tpb1XyqGOQ/sddefault.jpg',
                'rating' => 4.5,
                'is_featured' => false
            ], [
                'name' => 'Harry Potter: The Golden Snitch',
                'slug' => 'harry-potter-the-golden-snitch',
                'category' => 'Fantasy',
                'video_url' => 'https://www.youtube.com/watch?v=pt8bwEWYxb0',
                'thumbnail' => 'https://img.youtube.com/vi/2Tpb1XyqGOQ/sddefault.jpg',
                'rating' => 4.5,
                'is_featured' => false
            ]
        ];

        Movie::insert($movies);
    }
}
