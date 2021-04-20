<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class UserOfficerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $data = new \App\Repositories\UserOfficerRepository();

        $data->create([
            'name' => "zufar",
            'email' => "zufar@gmail.com",
            'password' => 'user_officer',
            'address' => $faker->address,
            'phone_number' => $faker->phoneNumber,
            'level_access' => 'admin'
        ]);

        $data->create([
            'name' => "auzan",
            'email' => "auzan@gmail.com",
            'password' => 'user_officer',
            'address' => $faker->address,
            'phone_number' => $faker->phoneNumber,
            'level_access' => 'admin'
        ]);
    }
}
