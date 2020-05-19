<?php

use Illuminate\Database\Seeder;
use App\Lounge;

class LoungeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Herb guacamole',
            'desc' => '',
            'price' => '$18'
        ]);

        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Ayocote bean hummus',
            'desc' => '',
            'price' => '$18'
        ]);

        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Mussels in escabeche',
            'desc' => '',
            'price' => '$22'
        ]);

        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Shishitos, wasabi, yogurt',
            'desc' => '',
            'price' => '$15'
        ]);

        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Carrots al pastor, piña',
            'desc' => '',
            'price' => '$22'
        ]);

        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Avocado taco, salsa macha',
            'desc' => '',
            'price' => '$9'
        ]);

        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Pork jowl taco, habanero salsa',
            'desc' => '',
            'price' => '$12'
        ]);

        Lounge::create([
            'category' => 'Lounge',
            'name' => 'Seafood tower',
            'desc' => 'Oyster veneno, mignonette,Uni, sea buckthorn aguachile, Lobster salpicon, Scallop, tamarind, chile, Tuna tartare, Bay scallop, whey, lovage',
            'price' => '$125'
        ]);
    }
}
