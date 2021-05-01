<?php

namespace App\Http\Controllers\UserMember\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SigninUserMemberRequest;
use App\Repositories\UserMemberRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    private $userMemberRepository;

    public function __construct(UserMemberRepository $userMemberRepository)
    {
        $this->userMemberRepository = $userMemberRepository;
    }

    public function index()
    {
        if(Auth::guard('user_member')->check())
        {
            return redirect()->route('user_member.dashboard');
        }
        return view('user_member.auth.signup');
    }

    public function signup(SigninUserMemberRequest $request)
    {
        $this->userMemberRepository->create($request->validated());

        return redirect()->route('login_member')
            ->with('notification_register', '<strong> Berhasil melakukan registerasi!</strong> Silahkan login dengan akun anda');
    }
}
