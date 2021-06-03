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

        $data->create([
            'nama' => "zufar",
            'alamat' => $faker->address,
            'nomor_hp' => $faker->phoneNumber
        ]);

        $data->create([
            'nama' => "auzan",
            'alamat' => $faker->address,
            'nomor_hp' => $faker->phoneNumber
        ]);

        for ($i=1;$i<=3;$i++)
        {
            $data->create([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'nomor_hp' => $faker->phoneNumber
            ]);
        }
    }
}
