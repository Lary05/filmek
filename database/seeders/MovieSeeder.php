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
                'description'=>'Dom Cobb, a kiemelkedő tolvaj, aki az emberek titkos álmaiban lop információkat, egy végső, rendkívül kockázatos feladattal szembesül: nem ellopni, hanem beültetni egy gondolatot valaki elméjébe. Ahogy a csapat mélyebbre merül az álmok rétegeibe, a valóság és az illúzió határa elmosódik, és minden döntés a mindennapi életükre is kihat. Egy vizuálisan lenyűgöző és intellektuálisan izgalmas sci-fi akciófilm, amely a tudat határait feszegeti.',
                'director_id'=>1,
                'category_id'=>1,
                'actors'=>[1,2],
                'cover_image'=>'films/film_1.jpg'
            ],
            [
                'title'=>'Titanic',
                'description'=>'A történelmi katasztrófa hátterében kibontakozó szerelmi történet: a gazdag Rose és a szegény Jack váratlanul egymásra találnak a világ legnagyobb és legmodernebb óceánjáróján. A hajó tragikus sorsa és a társadalmi különbségek egyaránt próbára teszik a szerelmet, miközben a történet a bátorság, az önfeláldozás és az emberi szív erejét mutatja be.',
                'director_id'=>5,
                'category_id'=>5,
                'actors'=>[1,5],
                'cover_image'=>'films/film_2.jpg'
            ],
            [
                'title'=>'Ponyvaregény',
                'description'=>'Quentin Tarantino kultikus mesterműve, amely egymással összefonódó történetszálakon keresztül mutatja be a Los Angeles-i alvilág életét. A film híres párbeszédeiről, fekete humoráról és váratlan fordulatairól, miközben bűnözők, zsoldosok és hétköznapi emberek életének különös, néha brutális, néha nevettető pillanatait tárja fel.',
                'director_id'=>3,
                'category_id'=>7,
                'actors'=>[2,4],
                'cover_image'=>'films/film_3.jpg'
            ],
            [
                'title'=>'Bosszúállók: Végjáték',
                'description'=>'A Marvel Univerzum epikus záróakkordja, amelyben a túlélő Bosszúállók összefognak, hogy visszafordítsák Thanos pusztító tetteit, aki fél univerzumot kipusztított. A hősöknek nemcsak a fizikai erejüket, hanem lelkierőiket és összetartásukat is próbára kell tenniük, miközben szembenéznek a múltjukkal és a jövőjükért hozott áldozatokkal. Egy időutazásra épülő terv, feszültséggel teli csaták és érzelmi pillanatok jellemzik a filmet, amely a Marvel-saga egyik legnagyobb és legmeghatóbb epizódja.',
                'director_id'=>6,
                'category_id'=>1,
                'actors'=>[3,4,6],
                'cover_image'=>'films/film_4.jpg'
            ]
        ];

        foreach ($movies as $m) {
            $movie = Movie::create([
                'title'=>$m['title'],
                'description'=>$m['description'],
                'director_id'=>$m['director_id'],
                'category_id'=>$m['category_id'],
                'cover_image'=>$m['cover_image']
            ]);

            // Színészek hozzáadása many-to-many kapcsolaton keresztül
            $movie->actors()->attach($m['actors']);
        }
    }
}
