<?php

namespace App\Http\Controllers\UserMember\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\ModelApp\UserMemberModel;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = UserMemberModel::where('google_id', $user->id)->first();

            if($finduser){

                Auth::guard('user_member')->login($finduser);

                return redirect()->route('user_member.dashboard');

            }else{
                $newUser = UserMemberModel::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);

                Auth::guard('user_member')->login($newUser);

                return redirect()->route('user_member.dashboard');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
