<?php

namespace App\Repositories;

use App\ModelApp\UserOfficerModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserOfficerRepository
{
    public function create($data)
    {
        $default = [
            'username' => $data['email']
        ];
        $data['password'] = bcrypt($data['password']);
        $data = array_merge($default, $data);
        return UserOfficerModel::create($data);
    }

    public function auth()
    {
        $user = Auth::guard('user_officer')->user();
        if (empty($user->remember_token)) {
            $user->remember_token = $this->generateToken();
            $user->save();
        }

        return $user;
    }

    public function generateToken()
    {
        return Str::random(80);
    }

    public function findRememberToken($token)
    {
        return UserOfficerModel::where('remember_token', $token)->first();
    }

    public function getById($id)
    {
        return UserOfficerModel::where('id', '=', $id)->get();
    }

    public function findById($id)
    {
        return UserOfficerModel::findOrFail($id);
    }

    public function findByUsername($u)
    {
        return UserOfficerModel::where('username', '=', $u)->first();
    }

    public function restore($id)
    {
        UserOfficerModel::withTrashed()->find($id)->restore();
    }

    public function soft_delete($id)
    {
        $user = UserOfficerModel::findOrFail($id);
        $user->delete();
    }

    public function destroy_permanent($id)
    {
        $user = UserOfficerModel::findOrFail($id);
//        Storage::delete('public/users_officer/photo/'.$user->photo);

        $user->forceDelete();
    }
}
