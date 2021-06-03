<?php

namespace App\Repositories;

use App\ModelApp\UserMemberModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserMemberRepository
{
    public function create($data)
    {
//        $default = [
//            'username' => $data['email']
//        ];
//        $data['password'] = bcrypt($data['password']);
//        $data = array_merge($default, $data);
        return UserMemberModel::create($data);
    }

    public function create_request($request)
    {
        $user_member = new UserMemberModel;

        // default
        $user_member->user_officer = auth()->guard('user_officer')->user()->name;

        // input request
        $user_member->nama = $request->nama;
        $user_member->nomor_cm = $request->nomor_cm;
        $user_member->tanggal_lahir = $request->tanggal_lahir;
        $user_member->alamat = $request->alamat;
        $user_member->nomor_hp = $request->nomor_hp;

        return $user_member->save();
    }

    public function auth()
    {
        $user = Auth::guard('user_member')->user();
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
        return UserMemberModel::where('remember_token', $token)->first();
    }

    public function get_paginate($paginate)
    {
        return UserMemberModel::orderBy('id', "desc")->paginate($paginate);
    }

    public function getById($id)
    {
        return UserMemberModel::where('id', '=', $id)->get();
    }

    public function findById($id)
    {
        return UserMemberModel::findOrFail($id);
    }

    public function findByUsername($u)
    {
        return UserMemberModel::where('username', '=', $u)->first();
    }

    public function restore($id)
    {
        UserMemberModel::withTrashed()->find($id)->restore();
    }

    public function soft_delete($id)
    {
        $user = UserMemberModel::findOrFail($id);
        $user->delete();
    }

    public function destroy_permanent($id)
    {
        $user = UserMemberModel::findOrFail($id);
//        Storage::delete('public/users_member/photo/'.$user->photo);

        $user->forceDelete();
    }
}
