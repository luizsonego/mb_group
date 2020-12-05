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
                    'code' => $faker->unique()->randomDigit,
                    'name' => $faker->unique()->realText(rand(10,20)),
                    'unit_price' => $faker->randomFloat
                ]);
        endfor;
    }
}
