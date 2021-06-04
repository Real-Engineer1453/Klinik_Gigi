<?php

use App\ModelApp\RekamMedisUserMemberModel;
use App\ModelApp\UserMemberModel;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

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
                  'anamnesa' => Str::random(20),
                  'riwayat_alergi' => Str::random(30),
                  'tindakan' => Str::random(30),
                  'terapi_obat' =>Str::random(30),
                  'user_officer' => 'zufar',
                ]);
              }
            }
        }
    }
}
