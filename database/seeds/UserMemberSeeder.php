<?php

use Faker\Factory;
use Illuminate\Database\Seeder;

class UserMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $data = new \App\Repositories\UserMemberRepository();

        for ($i=1;$i<=10;$i++)
        {
            $data->create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => 'user_member',
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber
            ]);
        }
    }
}
