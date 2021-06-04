<?php

namespace App\Http\Controllers\UserOfficer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserMemberRequest;
use App\Http\Requests\UpdateUserMemberRequest;
use App\ModelApp\UserMemberModel;
use App\Repositories\RekamMedisUserMemberRepository;
use App\Repositories\UserMemberRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserMemberController extends Controller
{
    private $userMemberRepository;

    public function __construct(UserMemberRepository $userMemberRepository)
    {
        $this->userMemberRepository = $userMemberRepository;
    }

    public function index(Request $request)
    {
        if($request)
        {
          $keyword = $request->get('keyword');

          $data = UserMemberModel::orderBy('nama', "asc")
              ->orWhere('nama', 'LIKE', "%$keyword%")
              ->orWhere('tanggal_lahir', 'LIKE', "%$keyword%")
              ->paginate(20);
        }
        else {
          $data = $this->userMemberRepository->get_paginate(20);
        }

        return view('user_officer.pages.user_member.index',
            compact('data')
        );
    }

    public function create()
    {
        return view('user_officer.pages.user_member.create');
    }

    public function store(StoreUserMemberRequest $request)
    {
        $request->validated();
        $this->userMemberRepository->create_request($request);

        return redirect()
            ->route('user_officer.user_member.index')
            ->with([
                'message' => 'Berita berhasil ditambahkan',
                'color' => '3',
            ]);
    }
    public function show($id)
    {
        $data_user = $this->userMemberRepository->findById($id);
        $data = (new RekamMedisUserMemberRepository())->get_id_and_paginate($id, 20);

        return view('user_officer.pages.user_member.show', compact('data_user', 'data'));
    }

    public function edit($id)
    {
        $data = $this->userMemberRepository->findById($id);

        return view('user_officer.pages.user_member.edit', compact('data'));
    }

    public function update(UpdateUserMemberRequest $request, $id)
    {
        $request->validated();
        $this->userMemberRepository->update_request($id, $request);

        return redirect()
            ->route('user_officer.user_member.index')
            ->with([
                'message' => 'Berita berhasil diupdate',
                'color' => '3',
            ]);
    }

    public function destroy($id)
    {
        $this->userMemberRepository->destroy($id);

        return redirect()->back();
    }
}
