<?php

namespace App\Repositories;

use App\ModelApp\RekamMedisUserMemberModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RekamMedisUserMemberRepository
{
    public function create($data)
    {
//        $default = [
//            'username' => $data['email']
//        ];
//        $data['password'] = bcrypt($data['password']);
//        $data = array_merge($default, $data);
        return RekamMedisUserMemberModel::create($data);
    }

    public function create_request($request)
    {
        $user_member = new RekamMedisUserMemberModel;

        // default
        $user_member->user_officer = auth()->guard('user_officer')->user()->name;

        // input request
        $user_member->id_user_member = $request->id;
        $user_member->anamnesa = $request->anamnesa;
        $user_member->riwayat_alergi = $request->riwayat_alergi;
        $user_member->tindakan = $request->tindakan;
        $user_member->terapi_obat = $request->terapi_obat;

        return $user_member->save();
    }

    public function update_request($id, $request)
    {
      $user_member = RekamMedisUserMemberModel::findOrFail($id);

      // default
      $user_member->user_officer = auth()->guard('user_officer')->user()->name;

      // input request
      $user_member->id_user_member = $request->id_user_member;
      $user_member->anamnesa = $request->anamnesa;
      $user_member->riwayat_alergi = $request->riwayat_alergi;
      $user_member->tindakan = $request->tindakan;
      $user_member->terapi_obat = $request->terapi_obat;

      return $user_member->save();
    }

    public function get_paginate($paginate)
    {
        return RekamMedisUserMemberModel::orderBy('id', "desc")->paginate($paginate);
    }

    public function get_id_and_paginate($id, $paginate)
    {
      return RekamMedisUserMemberModel::where('id_user_member', '=', $id)->orderBy('id', "desc")->paginate($paginate);
    }

    public function getById($id)
    {
        return RekamMedisUserMemberModel::where('id', '=', $id)->get();
    }

    public function findById($id)
    {
        return RekamMedisUserMemberModel::findOrFail($id);
    }

    public function restore($id)
    {
        RekamMedisUserMemberModel::withTrashed()->find($id)->restore();
    }

    public function soft_delete($id)
    {
        $user = RekamMedisUserMemberModel::findOrFail($id);
        $user->delete();
    }

    public function destroy_permanent($id)
    {
        $user = RekamMedisUserMemberModel::findOrFail($id);
//        Storage::delete('public/users_member/photo/'.$user->photo);

        $user->forceDelete();
    }
}
