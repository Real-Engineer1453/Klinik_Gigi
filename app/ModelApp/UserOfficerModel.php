<?php

namespace App\ModelApp;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserOfficerModel extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'users_officer';

    protected $guard = 'user_officer';

    protected $fillable = [
        'name',
        'username',
        'address',
        'email',
        'password',
        'phone_number',
        'level_access'
    ];
}
