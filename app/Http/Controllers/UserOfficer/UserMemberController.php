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
}
