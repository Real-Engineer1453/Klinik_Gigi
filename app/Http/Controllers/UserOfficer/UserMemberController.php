<?php

namespace App\Http\Controllers\UserOfficer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserMemberRequest;
use App\Http\Requests\UpdateUserMemberRequest;
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

    public function index()
    {
        $data = $this->userMemberRepository->get_paginate(20);

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
//        return 'uye';
        $request->validated();
        $this->userMemberRepository->create_request($request);

        return redirect()
            ->route('user_officer.user_member.index')
            ->with([
                'message' => 'Berita berhasil diupdate',
                'color' => '3',
            ]);
    }
    public function show($id)
    {
        $data = $this->userMemberRepository->findById($id);

        return view('user_officer.pages.user_member.show', compact('data'));
    }

    public function edit($id)
    {
        $data = $this->userMemberRepository->findById($id);

        return view('user_officer.pages.user_member.edit', compact('data'));
    }

    public function update(UpdateUserMemberRequest $request, $id)
    {
        $data = $this->userMemberRepository->findById($id);

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
