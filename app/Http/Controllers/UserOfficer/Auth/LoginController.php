<?php

namespace App\Http\Controllers\UserOfficer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserOfficerRequest;
use App\Repositories\UserOfficerRepository;
use Illuminate\Support\Facades\Auth;
use Throwable;

class LoginController extends Controller
{
    private $userOfficerRepository;

    public function __construct(UserOfficerRepository $userOfficerRepository)
    {
        $this->userOfficerRepository = $userOfficerRepository;
    }

    public function index()
    {
        if(Auth::guard('user_officer')->check())
        {
            return redirect()->route('user_officer.dashboard');
        }
        return view('user_officer.auth.login');
    }

    public function login(LoginUserOfficerRequest $request)
    {

        if (Auth::guard('user_officer')->attempt($request->validated())) {
            try {
                return redirect()->route('user_officer.dashboard');
            } catch (Throwable $e) {
                report($e);

                return false;
            }
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::guard('user_officer')->logout();

        return redirect()->route('login_officer');
    }
}
