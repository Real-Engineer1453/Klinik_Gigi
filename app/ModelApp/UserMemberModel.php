<?php

namespace App\ModelApp;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class UserMemberModel extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $table = 'users_member';

    protected $guard = 'user_member';

    protected $fillable = [
        'name',
        'nomor_cm',
        'tanggal_lahir',
        'alamat',
        'nomor_hp',
    ];
}
