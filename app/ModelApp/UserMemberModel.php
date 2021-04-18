<?php

namespace App\ModelApp;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserMemberModel extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'users_member';

    protected $guard = 'user_member';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number'
    ];
}
