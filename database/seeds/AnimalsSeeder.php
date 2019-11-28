<?php

use Illuminate\Database\Seeder;

class AnimalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->bigIncrements('id');
        // $table->string('name');
        // $table->string('gender');
        // $table->integer('age');
        // $table->integer('weight');
        // $table->integer('size');
        // $table->string('img')->nullable();
        // $table->string('about');
  
        DB::table('animals')->insert([
            'name' => 'Charlie',
            'gender' => 'man',
            'age' => '5',
            'weight' => '10',
            'size' => '45',
            'img' => 'http://puptrotters.com/wp-content/uploads/2014/02/charlie-w200h200@2x.jpg',
            'about' => 'Im a dogo for make love on your house',
            'race_id' => '1'
        ]);

        DB::table('animals')->insert([
            'name' => 'Bojack',
            'gender' => 'man',
            'age' => '35',
            'weight' => '100',
            'size' => '105',
            'img' => 'http://justabouttv.fr/wp-content/uploads/bojack-horseman-season-5.png',
            'about' => 'Im a horse',
            'race_id' => '2'
        ]);


        DB::table('animals')->insert([
            'name' => 'Duchesse',
            'gender' => 'girl',
            'age' => '10',
            'weight' => '5',
            'size' => '15',
            'img' => 'https://disney-planet.fr/wp-content/uploads/2015/03/duchesse-personnage-les-aristochats-08.jpg',
            'about' => 'Im a Duchesse a funny and elegant cat, i love jazz',
            'race_id' => '3'
        ]);

        DB::table('animals')->insert([
            'name' => 'Kaa',
            'gender' => 'girl',
            'age' => '30',
            'weight' => '105',
            'size' => '100',
            'img' => 'https://vignette.wikia.nocookie.net/princebalto/images/f/f0/Kaa_live_action.PNG',
            'about' => 'Im a Kaa i eating your child',
            'race_id' => '4'
        ]);

        DB::table('animals')->insert([
            'name' => 'Po',
            'gender' => 'man',
            'age' => '30',
            'weight' => '105',
            'size' => '100',
            'img' => 'https://a1cf74336522e87f135f-2f21ace9a6cf0052456644b80fa06d4f.ssl.cf2.rackcdn.com/images/characters_opt/p-kung-fu-panda-2-po.jpg',
            'about' => 'Im a po, a master of kung-fu',
            'race_id' => '5'
        ]);
    }
}
