<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Category;
use App\Models\Actor;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = Movie::create([
            'title' => 'Inception',
            'description' => 'A mind-bending thriller.',
            'director_id' => Director::where('name','Christopher Nolan')->first()->id,
            'category_id' => Category::where('name','Action')->first()->id,
            'cover_image' => 'inception.jpg'
        ]);

        $movie->actors()->attach([
            Actor::where('name','Leonardo DiCaprio')->first()->id
        ]);
    }
}
