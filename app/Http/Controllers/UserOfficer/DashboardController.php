<?php

namespace App\Http\Controllers\UserOfficer;

use App\Http\Controllers\Controller;
use App\Repositories\UserOfficerRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $userOfficerRepository;

    public function __construct(UserOfficerRepository $userOfficerRepository)
    {
        $this->userOfficerRepository = $userOfficerRepository;
    }

    public function index()
    {
        $id =auth()->guard('user_officer')->user()->id;

        $data = $this->userOfficerRepository->findById($id);

        return view('user_officer.pages.user_member',
            compact('data')
        );
    }

}
