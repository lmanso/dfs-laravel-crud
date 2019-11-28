<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $user = new User;
            $user->name = $faker->name;
            $user->email = $faker->unique()->safeEmail;
            $user->email_verified_at = now();
            $user->password = bcrypt('123456');
            $user->role = 0;
            $user->img = 'https://i.dlpng.com/static/png/5065916-stockvader-predicted-adig-user-profile-icon-png-clipart-profile-icon-png-880_880_preview.png';
            $user->save();
        }

	        DB::table('users')->insert([
	            'name' => 'admin',
	            'email' => 'admin@gmail.com',
                'role' => 1,
                'img' => 'https://www.pinclipart.com/picdir/middle/355-3553881_stockvader-predicted-adig-user-profile-icon-png-clipart.png',
                'password' => 'admin1478',
	        ]);
    }
}
