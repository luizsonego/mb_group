<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
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
            DB::table('person')
                ->insert([
                    'name' => $faker->name,
                    'cpf' => $faker->cpf,
                    'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now')
                ]);
        endfor;

    }
}
