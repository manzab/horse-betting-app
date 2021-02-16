<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Horse;

class HorseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horse1 = new Horse();
        $horse1->id = 1;
        $horse1->name = "Sweetie";
        $horse1->runs = 7;
        $horse1->wins =  5;
        $horse1->about = "Young and strong horse. Recently was bought from farmer in Ariogala.";
        $horse1->save();

        $horse1->id = 2;
        $horse2 = new Horse();
        $horse2->name = "Pumpkin";
        $horse2->runs = 25;
        $horse2->wins =  3;
        $horse2->about = "Older and stubborn horse. His career is going to an end.";
        $horse2->save();
    }
}
