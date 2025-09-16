<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;


class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::create(['name' => 'Leonardo DiCaprio', 'gender' => 'man']);
        Actor::create(['name' => 'Meryl Streep', 'gender' => 'woman']);
        Actor::create(['name' => 'Brad Pitt', 'gender' => 'man']);
    }
}
