<?php

use Illuminate\Database\Seeder;
use App\Dessert;

class DessertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Dessert::create([
            'category' => 'Dessert',
            'name' => 'Golden husk meringue',
            'desc' => '',
            'price' => '$18'
        ]);

        Dessert::create([
            'category' => 'Dessert',
            'name' => 'Hazelnut tart, brown butter',
            'desc' => '',
            'price' => '$16'
        ]);

        Dessert::create([
            'category' => 'Dessert',
            'name' => 'Pink moon, crême brûlée, grapefruit',
            'desc' => '',
            'price' => '$14'
        ]);

        Dessert::create([
            'category' => 'Dessert',
            'name' => 'Piña loca, rum, coconut',
            'desc' => '',
            'price' => '$19'
        ]);

        Dessert::create([
            'category' => 'Dessert',
            'name' => 'Tres leches, carlota, lime',
            'desc' => '',
            'price' => '$14'
        ]);

        Dessert::create([
            'category' => 'Dessert',
            'name' => 'Cucumber, wild berries, raspado',
            'desc' => '',
            'price' => '$18'
        ]);

        Dessert::create([
            'category' => 'Dessert',
            'name' => 'Cheese, membrillo, masa crisp',
            'desc' => '',
            'price' => 'xx'
        ]);

        Dessert::create([
            'category' => 'Teas & Infusions',
            'name' => 'Cheese, membrillo, masa crisp',
            'desc' => '',
            'price' => '$8'
        ]);

        Dessert::create([
            'category' => 'Teas & Infusions',
            'name' => 'Green / Jasmine Pearls',
            'desc' => '',
            'price' => '$8'
        ]);


        Dessert::create([
            'category' => 'Teas & Infusions',
            'name' => 'Fermented / Pu-erh',
            'desc' => '',
            'price' => '$8'
        ]);

        Dessert::create([
            'category' => 'Teas & Infusions',
            'name' => 'Oolong / Oriental Beauty',
            'desc' => '',
            'price' => '$8'
        ]);

        Dessert::create([
            'category' => 'Teas & Infusions',
            'name' => 'Herbal / Scarlet Glow',
            'desc' => '',
            'price' => '$8'
        ]);

        Dessert::create([
            'category' => 'Teas & Infusions',
            'name' => 'Spice / Darjeeling 1st Flush Arya Estate',
            'desc' => '',
            'price' => '$8'
        ]);

        Dessert::create([
            'category' => 'Teas & Infusions',
            'name' => 'Black / Himalayan Black',
            'desc' => '',
            'price' => '$8'
        ]);
        
        Dessert::create([
            'category' => 'Coffee',
            'name' => 'Espresso',
            'desc' => '',
            'price' => '$4'
        ]);

        Dessert::create([
            'category' => 'Coffee',
            'name' => 'Cortado',
            'desc' => '',
            'price' => '$4'
        ]);

        Dessert::create([
            'category' => 'Coffee',
            'name' => 'Americano',
            'desc' => '',
            'price' => '$6'
        ]);

        Dessert::create([
            'category' => 'Coffee',
            'name' => 'Cappuccino',
            'desc' => '',
            'price' => '$7'
        ]);

        Dessert::create([
            'category' => 'Coffee',
            'name' => 'Latte',
            'desc' => '',
            'price' => '$7'
        ]);

        Dessert::create([
            'category' => 'Coffee',
            'name' => 'Carajillo',
            'desc' => '',
            'price' => '$16'
        ]);
    }
}
