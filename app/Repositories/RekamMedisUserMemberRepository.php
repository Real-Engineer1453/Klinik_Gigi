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
        $rm_user_member = new RekamMedisUserMemberModel;

          // default
        $rm_user_member->user_officer = auth()->guard('user_officer')->user()->name;

          // input request
        $rm_user_member->id_user_member = $request->id;
        $rm_user_member->anamnesa = $request->anamnesa;
        $rm_user_member->riwayat_alergi = $request->riwayat_alergi;
        $rm_user_member->tindakan = $request->tindakan;
        $rm_user_member->terapi_obat = $request->terapi_obat;

        return $rm_user_member->save();
    }

    public function update_request($id, $request)
    {
        $rm_user_member = RekamMedisUserMemberModel::findOrFail($id);

        // default
        $rm_user_member->user_officer = auth()->guard('user_officer')->user()->name;

        // input request
        $rm_user_member->id_user_member = $request->id;
        $rm_user_member->anamnesa = $request->anamnesa;
        $rm_user_member->riwayat_alergi = $request->riwayat_alergi;
        $rm_user_member->tindakan = $request->tindakan;
        $rm_user_member->terapi_obat = $request->terapi_obat;

      return $rm_user_member->save();
//      return $rm_user_member;
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
