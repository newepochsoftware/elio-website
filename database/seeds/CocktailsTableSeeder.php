<?php

use Illuminate\Database\Seeder;
use App\Cocktails;

class CocktailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Dealer’s Choice',
            'desc' => 'Cimmaron Blanco | Koch El Espadin Giffard Triple Sec, Combier, Lime',
            'price' => '$19'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'House Margarita',
            'desc' => 'Casa Dragones Blanco | Rey Campero Espadin Giffard, Triple Sec, Combier, Lime, Spiced Salt',
            'price' => '$24'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Paloma',
            'desc' => 'Siete Leguas Reposado | Yola 1971 Joven Grapefruit, Syrup, Lime, Soda',
            'price' => '$18'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Jasmine Cooler',
            'desc' => 'Tito’s Handmade Vodka, Cucumber Water, Jasmine, Orange Blossom Water, Lime',
            'price' => '$18'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Donny Blanc',
            'desc' => 'Tapatio 110, Aperol, Campari, Carpano Bianco, Grapefruit',
            'price' => '$22'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Welcome to Durango',
            'desc' => 'Origen de Raiz, Giffard Crème de Cacao, Lemon, Hoja, Santa',
            'price' => '$19'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Desert Drive',
            'desc' => 'Por Siempre, Velvet Falernum, Prickly Pear-infused, Dolin Blanc, Lime',
            'price' => '$17'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Trickle Down',
            'desc' => 'Uruapan Charanda, Empirical Spirits Ayuuk, Avua, Amburana, Honey, Epazote, Mint',
            'price' => '$18'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Last Onion in the Jar',
            'desc' => 'Rittenhouse Rye, El Dorado 12yr, Carpano Sweet &, Volume Primo Sweet Vermouths',
            'price' => '$19'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Ride or Die',
            'desc' => 'Toki, Mal Bien, Piloncillo, Housemade Coffee-Tobacco, Bitters',
            'price' => '$18'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Mexican Elvis',
            'desc' => 'Michter’s Bourbon, Koch El Espadin Olla de Barro, Ancho Reyes, Giffard Crème de Cacao, Horchata',
            'price' => '$19'
        ]);

        Cocktails::create([
            'cocktail_category' => 'Cocktails',
            'name' => 'Chingatela',
            'desc' => 'Shot, Beer & Sangrita',
            'price' => '$MP'
        ]);
    }
}
