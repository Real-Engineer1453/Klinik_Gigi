<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            'tanggal_lahir' => '1999-08-28',
            'nomor_hp' => $faker->phoneNumber
        ]);

        $data->create([
            'nama' => "auzan",
            'nomor_cm' => 2,
            'alamat' => $faker->address,
            'tanggal_lahir' => '1995-08-28',
            'nomor_hp' => $faker->phoneNumber
        ]);

        for ($i=3;$i<=50;$i++)
        {
            $date = Carbon::create(2015, 5, 28, 0, 0, 0);

            $data->create([
                'nama' => $faker->name,
                'nomor_cm' => $i,
                'alamat' => $faker->address,
                'tanggal_lahir' => $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
                'nomor_hp' => $faker->phoneNumber
            ]);
        }
    }
}
