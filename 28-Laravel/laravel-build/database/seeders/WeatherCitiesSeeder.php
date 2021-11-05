<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WeatherCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'city' => 'Kyiv',
        ]);
        DB::table('cities')->insert([
            'city' => 'Lviv',
        ]);
        DB::table('cities')->insert([
            'city' => 'Rivne',
        ]);
        DB::table('cities')->insert([
            'city' => 'Dnipro',
        ]);
        DB::table('cities')->insert([
            'city' => 'Mykolayiv',
    }
}
