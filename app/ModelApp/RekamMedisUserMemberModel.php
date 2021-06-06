<?php

namespace App\ModelApp;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class RekamMedisUserMemberModel extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'rekam_medis_user_member';

    protected $guard = 'user_member';

    protected $fillable = [
        'id',
        'id_user_member',
        'anamnesa',
        'riwayat_alergi',
        'tindakan',
        'terapi_obat',
        'user_officer',
    ];
}
