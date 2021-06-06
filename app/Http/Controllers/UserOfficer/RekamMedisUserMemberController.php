<?php

namespace App\Http\Controllers\UserOfficer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRekamMedisUserMemberRequest;
use App\Http\Requests\UpdateRekamMedisUserMemberRequest;
use App\Repositories\RekamMedisRekamMedisUserMemberRepository;
use App\Repositories\RekamMedisUserMemberRepository;
use App\Repositories\UserMemberRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RekamMedisUserMemberController extends Controller
{
    private $rekamMedisUserMemberRepository;

    public function __construct(RekamMedisUserMemberRepository $rekamMedisUserMemberRepository)
    {
        $this->rekamMedisUserMemberRepository = $rekamMedisUserMemberRepository;
    }

    public function create($id)
    {
        $data_member = (new UserMemberRepository())->findById($id);

        return view('user_officer.pages.user_member.rekam_medis.create', compact('data_member'));
    }

    public function store(StoreRekamMedisUserMemberRequest $request)
    {
        $request->validated();
        $this->rekamMedisUserMemberRepository->create_request($request);

        return redirect()
            ->route('user_officer.user_member.show', $request->id)
            ->with([
                'message' => 'Data berhasil ditambahkan',
                'color' => '3',
            ]);
    }

    public function edit($id)
    {
        $data = $this->rekamMedisUserMemberRepository->findById($id);
        $data_member = (new UserMemberRepository())->findById($data->id_user_member);

        return view('user_officer.pages.user_member.rekam_medis.edit', compact('data_member','data'));
    }

    public function update(UpdateRekamMedisUserMemberRequest $request, $id)
    {
        $request->validated();
        $this->rekamMedisUserMemberRepository->update_request($id, $request);

        return redirect()
            ->route('user_officer.user_member.show', $request->id)
            ->with([
                'message' => 'Data berhasil diupdate',
                'color' => '3',
            ]);
    }

    public function destroy($id)
    {
        $this->rekamMedisUserMemberRepository->destroy($id);

        return redirect()->back();
    }
}
