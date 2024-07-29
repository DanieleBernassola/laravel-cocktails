<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CocktailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $ingredientsList = [
            'Rum', 'Vodka', 'Gin', 'Tequila', 'Whiskey', 'Lime', 'Lemon', 'Mint', 'Sugar', 'Soda', 'Cola', 'Orange Juice', 'Pineapple Juice', 'Grenadine'
        ];

        for ($i = 0; $i < 10; $i++) {
            $cocktail = new Cocktail();

            $cocktail->name = $faker->word . ' ' . $faker->colorName;
            //$cocktail->ingredients = implode(', ', $faker->randomElements($ingredientsList, $faker->numberBetween(3, 5)));
            $cocktail->price = $faker->randomFloat(2, 5, 20);
            $cocktail->gradation = $faker->randomFloat(2, 0, 40);
            $cocktail->is_alcoholic = $faker->boolean();

            $cocktail->save();
        }
    }
}

