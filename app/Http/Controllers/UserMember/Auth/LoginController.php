<?php

namespace App\Http\Controllers\UserMember\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserMemberRequest;
use App\Repositories\UserMemberRepository;
use Illuminate\Support\Facades\Auth;
use Throwable;

class LoginController extends Controller
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
        return view('user_member.auth.login');
    }

    public function login(LoginUserMemberRequest $request)
    {

        if (Auth::guard('user_member')->attempt($request->validated())) {
            try {
                return redirect()->route('home');
            } catch (Throwable $e) {
                report($e);

                return false;
            }
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('user_member')->logout();

        return redirect()->route('home');
    }
}
