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
            'nomor_cm' => 1,
            'alamat' => $faker->address,
            'nomor_hp' => $faker->phoneNumber
        ]);

        $data->create([
            'nama' => "auzan",
            'nomor_cm' => 2,
            'alamat' => $faker->address,
            'nomor_hp' => $faker->phoneNumber
        ]);

        for ($i=3;$i<=50;$i++)
        {
            $data->create([
                'nama' => $faker->name,
                'nomor_cm' => $i,
                'alamat' => $faker->address,
                'nomor_hp' => $faker->phoneNumber
            ]);
        }
    }
}
