<?php

namespace App\ModelApp;

use Illuminate\Database\Eloquent\Model;

class UserOfficerModel extends Model
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
