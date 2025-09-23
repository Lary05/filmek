<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directors = [
            'Christopher Nolan',
            'Steven Spielberg',
            'Quentin Tarantino',
            'Martin Scorsese',
            'James Cameron',
            'Peter Jackson'
        ];

        foreach ($directors as $dir) {
            Director::create(['name' => $dir]);
        }
    }
}
