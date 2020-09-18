<?php

use Illuminate\Database\Seeder;

class areasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'label' => "A",
        ]);
        DB::table('areas')->insert([
            'label' => "B",
        ]);
        DB::table('areas')->insert([
            'label' => "C",
        ]);
        DB::table('areas')->insert([
            'label' => "D",
        ]);
        DB::table('areas')->insert([
            'label' => "E",
        ]);
    }
}
