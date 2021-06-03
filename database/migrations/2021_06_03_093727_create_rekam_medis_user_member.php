<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamMedisUserMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis_user_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user_member');
            $table->string('anamnesa')->nullable();
            $table->string('riwayat_alergi')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('terapi_obat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam_medis_user_member');
    }
}
