<?php

use Illuminate\Database\Seeder;
use App\Dinner;

class DinnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Dinner::create([
            'category' => 'Cold Seafood',
            'name' => 'Oysters, veneno, mignonette',
            'desc' => '',
            'price' => '4ea'
        ]);

        Dinner::create([
            'category' => 'Cold Seafood',
            'name' => 'Seabream, corn aguachile, fingerlimes',
            'desc' => '',
            'price' => '$25'
        ]);

        Dinner::create([
            'category' => 'Cold Seafood',
            'name' => 'Calamari, ginger mojo, cucumber',
            'desc' => '',
            'price' => '$22'
        ]);

        Dinner::create([
            'category' => 'Cold Seafood',
            'name' => 'Scallop, tamarind, chile',
            'desc' => '',
            'price' => '$24'
        ]);

        Dinner::create([
            'category' => 'Cold Seafood',
            'name' => 'Tuna tataki, smoked soy, nopal, scallions',
            'desc' => '',
            'price' => '$28'
        ]);

        Dinner::create([
            'category' => 'Cold Seafood',
            'name' => 'Dungeness crab, avocado, lavash',
            'desc' => '',
            'price' => '$110'
        ]);

        Dinner::create([
            'category' => 'Cold Seafood',
            'name' => 'Seafood tower',
            'desc' => 'Oyster, veneno, mignonette ,Uni, sea buckthorn aguachile ,Lobster salpicon ,Scallop, tamarind, chile ,Tuna tartare ,Bay scallop, whey, lovage',
            'price' => '$125'
        ]);

        Dinner::create([
            'category' => 'Antijitos',
            'name' => 'Avocado taco, salsa macha',
            'desc' => '',
            'price' => '$9'
        ]);

        Dinner::create([
            'category' => 'Antijitos',
            'name' => 'Truffle tostada, cheddar, corn',
            'desc' => '',
            'price' => '$34'
        ]);

        Dinner::create([
            'category' => 'Antijitos',
            'name' => 'Kampachi tostada, shiso, yuzu',
            'desc' => '',
            'price' => '$23'
        ]);

        Dinner::create([
            'category' => 'Antijitos',
            'name' => 'Shishitos, wasabi, yogurt',
            'desc' => '',
            'price' => '$15'
        ]);

        Dinner::create([
            'category' => 'Antijitos',
            'name' => 'Carrots al pastor, piña',
            'desc' => '',
            'price' => '$22'
        ]);

        Dinner::create([
            'category' => 'Antijitos',
            'name' => 'Mussels in escabeche',
            'desc' => '',
            'price' => '$22'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Chayote tiradito, mandarin',
            'desc' => '',
            'price' => '$19'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Fruit salad, citrus chamoy',
            'desc' => '',
            'price' => '$16'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Lettuce, tomato, meyer lemon, vinaigrette',
            'desc' => '',
            'price' => '$24'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Herb Guacamole',
            'desc' => '',
            'price' => '$18'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Brocoli, hoja santa',
            'desc' => '',
            'price' => '$17'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Green mole, tokyo turnip',
            'desc' => '',
            'price' => '$26'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Squash, avocado, salsa verde',
            'desc' => '',
            'price' => '$24'
        ]);

        Dinner::create([
            'category' => 'Vegetables',
            'name' => 'Mushrooms, mole blanco',
            'desc' => '',
            'price' => '$24'
        ]);

        Dinner::create([
            'category' => 'Mains',
            'name' => 'Lobster and chorizo',
            'desc' => '',
            'price' => '$49'
        ]);

        Dinner::create([
            'category' => 'Mains',
            'name' => 'Branzino a la talla',
            'desc' => '',
            'price' => '$36'
        ]);

        Dinner::create([
            'category' => 'Mains',
            'name' => 'Whole snapper, crispy scales, herbs',
            'desc' => '',
            'price' => '$125'
        ]);

        Dinner::create([
            'category' => 'Mains',
            'name' => 'Tomahawk steak, bone marrow, chicatana',
            'desc' => '',
            'price' => '$165'
        ]);

        Dinner::create([
            'category' => 'Mains',
            'name' => 'Pork belly pibil, xinpec, salsa, tatemada',
            'desc' => '',
            'price' => '$48'
        ]);

        Dinner::create([
            'category' => 'Mains',
            'name' => 'Mole de la Casa, sweet potato',
            'desc' => '',
            'price' => '$29'
        ]);
    }
}
