<?php

namespace App\Http\Controllers\UserOfficer;

use App\Http\Controllers\Controller;
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
        return view('petugas.pengolahan.berita.create');
    }

    public function store(Request $request)
    {
        $request->validated();
        $this->userMemberRepository->create_request($request);

        return redirect()->route('petugas.berita.index');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = $this->userMemberRepository->findById($id);

        return view('petugas.pengolahan.berita.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->userMemberRepository->findById($id);

        $request->validated();
        $this->userMemberRepository->update_request($id, $request);

        return redirect()
            ->route('petugas.berita.edit', $data->id)
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
