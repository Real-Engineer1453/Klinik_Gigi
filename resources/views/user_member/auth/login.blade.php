@extends('user_member.layouts.login')

@section('title')
Sign In
@endsection

@section('content')
<section>
    <div class="page-header section-height-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">

                            @if(Session::has('notification_register'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text text-white"><?= session('notification_register') ?></span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                </button>
                            </div>
                            @endif

                            <h4 class="font-weight-bolder">Sign In</h4>
                            <p class="mb-0">Enter your email and password to sign in</p>
                        </div>
                    <div class="card-body">
                        <form role="form" class="form" method="POST" action="{{route('auth.login_member')}}">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control form-control-lg" placeholder="Email or Username" type="text" name="username" id="username" value="{{ old('username') }}">
                        </div>
                        @error('username')
                        <span class="bmd text-danger pl-5">{{ $message }}</span>
                        @enderror

                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Password" id="password" autocomplete="off" class="form-control form-control-lg" value="{{old('password')}}">
                        </div>
                        @error('password')
                        <span class="bmd text-danger pl-5">{{ $message }}</span>
                        @enderror

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg bg-gradient-warning btn-lg w-100 mt-4 mb-0">Sign in</button>
                        </div>
                        </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                        <p class="mb-4 text-sm mx-auto">
                        Don't have an account?
                        <a href="{{route('signup_member')}}" class="text-warning text-gradient font-weight-bold">Sign up</a>
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                    <div class="position-relative bg-gradient-warning h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
                    <img src="{{ url ('front_office/assets/img/shapes/pattern-lines.svg')}}" alt="pattern-lines" class="position-absolute opacity-4 start-0">
                    <div class="position-relative">
                        <img class="max-width-500 w-100 position-relative z-index-2" src="{{ url ('front_office/assets/img/illustrations/chat.png')}}">
                    </div>
                    <h4 class="mt-5 text-white font-weight-bolder">Ucapan Selamat</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aspernatur accusamus natus..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('navbar')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid">
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
            </button>

            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bolder d-flex align-items-center me-2 active" aria-current="page" href="{{ route('home')}}">
                        WELCOME TO PKS MUDA DIGITAL BASECAMP
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
        <!-- End Navbar -->
    </div>
    </div>
</div>
@endpush



