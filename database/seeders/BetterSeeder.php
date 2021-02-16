<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Better;

class BetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $better1 = new Better();
        $better1->name = "Petras";
        $better1->surname = "Petraitis";
        $better1->bet = 2050.15;
        $better1->horse_id = 1;
        $better1->save();

        $better2 = new Better();
        $better2->name = "Jonas";
        $better2->surname = "Jonaitis";
        $better2->bet = 560.54;
        $better2->horse_id = 1;
        $better2->save(); 
    }
}
