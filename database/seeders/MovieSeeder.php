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
        $movies = [
            [
                'title'=>'Eredet',
                'description'=>'Egy izgalmas thriller, amelyben az álmok világában játszódik.',
                'director_id'=>1,
                'category_id'=>1,
                'actors'=>[1,2]
            ],
            [
                'title'=>'Titanic',
                'description'=>'Egy romantikus dráma a híres Titanic hajón.',
                'director_id'=>5,
                'category_id'=>5,
                'actors'=>[1,5]
            ],
            [
                'title'=>'Ponyvaregény',
                'description'=>'Bűnügyi történetek fekete humorral fűszerezve.',
                'director_id'=>3,
                'category_id'=>7,
                'actors'=>[2,4]
            ],
            [
                'title'=>'Bosszúállók: Végjáték',
                'description'=>'Szuperhősök egyesülnek, hogy megmentsék a világot.',
                'director_id'=>6,
                'category_id'=>1,
                'actors'=>[3,4,6]
            ]
        ];

        foreach ($movies as $m) {
            $movie = Movie::create([
                'title'=>$m['title'],
                'description'=>$m['description'],
                'director_id'=>$m['director_id'],
                'category_id'=>$m['category_id']
            ]);

            // Színészek hozzáadása many-to-many kapcsolaton keresztül
            $movie->actors()->attach($m['actors']);
        }
    }
}
