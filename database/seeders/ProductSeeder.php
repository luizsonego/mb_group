<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');

        for($i=0; $i<=50; $i++):
            DB::table('products')
                ->insert([
                    'code' => $faker->unique(true)->numberBetween(1, 500),
                    'name' => $faker->unique()->word . $faker->randomLetter,
                    'unit_price' => $faker->randomDigit
                ]);
                $faker->unique(true);
        endfor;
    }
}
