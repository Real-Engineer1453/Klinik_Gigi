<?php

use App\ModelApp\RekamMedisUserMemberModel;
use App\ModelApp\UserMemberModel;
use Faker\Factory;
use Illuminate\Database\Seeder;

class RekamMedisUserMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $data = new \App\Repositories\RekamMedisUserMemberRepository();

        for ($i=1;$i<=50;$i++)
        {
            $user_member = UserMemberModel::where('id', '=', $i)->first();//(new \App\Repositories\RekamMedisUserMemberRepository())->findById($i);

            if ($user_member) {
              for ($j = 1; $j <= 25; $j++) {
                $data->create([
                  'id_user_member' => $user_member->id,
                  'anamnesa' => $faker->name,
                  'riwayat_alergi' => $faker->address,
                  'tindakan' => $faker->address,
                  'terapi_obat' => $faker->phoneNumber,
                  'user_officer' => 'zufar',
                ]);
              }
            }
        }
    }
}
