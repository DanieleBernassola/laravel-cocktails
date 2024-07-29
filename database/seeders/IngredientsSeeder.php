<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredientsList = [
            'Rum', 'Vodka', 'Gin', 'Tequila', 'Whiskey', 'Lime', 'Lemon', 'Mint', 'Sugar', 'Soda', 'Cola', 'Orange Juice', 'Pineapple Juice', 'Grenadine'
        ];

        for ($i = 0; $i < 10; $i++) {
            $cocktail = new Cocktail();

            $cocktail->name = $faker->word . ' ' . $faker->colorName;
            $cocktail->ingredients = implode(', ', $faker->randomElements($ingredientsList, $faker->numberBetween(3, 5)));
            $cocktail->price = $faker->randomFloat(2, 5, 20);
            $cocktail->gradation = $faker->randomFloat(2, 0, 40);

            $cocktail->save();
    }
}
