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
        Director::create(['name' => 'Christopher Nolan']);
        Director::create(['name' => 'Steven Spielberg']);
        Director::create(['name' => 'Quentin Tarantino']);
    }
}
