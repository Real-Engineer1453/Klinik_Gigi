<?php

namespace App\Http\Controllers\UserMember;

use App\Http\Controllers\Controller;
use App\Repositories\UserMemberRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $userMemberRepository;

    public function __construct(UserMemberRepository $userMemberRepository)
    {
        $this->userMemberRepository = $userMemberRepository;
    }

    public function index()
    {
        $id =auth()->guard('user_member')->user()->id;

        $data = $this->userMemberRepository->findById($id);

        return view('user_member.profile.index',
            compact('data')
        );
    }

}
