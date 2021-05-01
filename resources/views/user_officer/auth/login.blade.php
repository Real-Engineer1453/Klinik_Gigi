@extends('user_officer.layouts.signin')

@section('title')
Login
@endsection

@section('content')

@if(Session::has('notification_register'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session('notification_register') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container-fluid">
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bolder d-flex align-items-center me-2 active" aria-current="page" href=".#">
                            <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                            ADMIN PKS MUDA
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

{{-- Footer Login --}}
<section>
<div class="page-header section-height-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-warning text-gradient">Welcome back</h3>
                        {{-- <p class="mb-0">Enter your email and password to sign in</p> --}}
                    </div>
                    <div class="card-body">
                    <form role="form text-left" class="form" method="POST" action="{{route('auth.login_officer')}}">
                        @csrf

                        <label>Username</label>
                        <div class="mb-3">
                            <input class="form-control " placeholder="Username" type="text" name="username"
                            id="username"
                            value="{{ old('username') }}">
                        </div>
                        @error('username')
                        <span class="bmd text-danger pl-5">{{ $message }}</span>
                        @enderror
                        <br>
                        <label>Password</label>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Password" id="password" autocomplete="off"
                            class="form-control" value="{{old('password')}}">
                        </div>
                        @error('password')
                        <span class="bmd text-danger pl-5">{{ $message }}</span>
                        @enderror

                        <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn bg-gradient-warning w-100 mt-4 mb-0">Sign in</button>
                        </div>
                    </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    {{-- <p class="mb-4 text-sm mx-auto">
                        Don't have an account?
                        <a href="javascript:;" class="text-warning text-gradient font-weight-bold">Sign up</a>
                    </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('back_office/assets/img/curved-images/curved6.jpg')"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
