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
        $actors = [
            ['name'=>'Leonardo DiCaprio','gender'=>'férfi','birth_date'=>'1974-11-11', 'image' => 'actors/actor_1.jpg'],
            ['name'=>'Brad Pitt','gender'=>'férfi','birth_date'=>'1963-12-18', 'image' => 'actors/actor_2.jpg'],
            ['name'=>'Scarlett Johansson','gender'=>'nő','birth_date'=>'1984-11-22', 'image' => 'actors/actor_3.jpg'],
            ['name'=>'Natalie Portman','gender'=>'nő','birth_date'=>'1981-06-09', 'image' => 'actors/actor_4.jpg'],
            ['name'=>'Tom Hanks','gender'=>'férfi','birth_date'=>'1956-07-09', 'image' => 'actors/actor_5.jpg'],
            ['name'=>'Emma Stone','gender'=>'nő','birth_date'=>'1988-11-06', 'image' => 'actors/actor_6.jpg']
        ];        

        foreach ($actors as $actor) {
            Actor::create($actor);
        }
    }
}
