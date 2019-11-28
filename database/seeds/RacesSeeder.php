<?php

use Illuminate\Database\Seeder;

class RacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => 'dog',
            'class' => 'mammifères',
            'life' => '13',
        ]);

        DB::table('races')->insert([
            'name' => 'horse',
            'class' => 'mammifères',
            'life' => '30',
        ]);

        DB::table('races')->insert([
            'name' => 'cat',
            'class' => 'mammifères',
            'life' => '16',
        ]);

        DB::table('races')->insert([
            'name' => 'snake',
            'class' => 'mammifères',
            'life' => '9',
        ]);

        DB::table('races')->insert([
            'name' => 'panda',
            'class' => 'mammifères',
            'life' => '20',
        ]);
    }
}
