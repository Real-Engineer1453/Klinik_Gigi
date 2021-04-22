@extends('user_member.layouts.login')

@section('title')
Registrasi
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

<main class="login-container">
    <div class="container">
    <div class="row page-login d-flex align-items-center">
        <div class="section-left col-12 col-md-6">
        <div class="animate__animated animate__fadeInRight">
            <h1 class="mb-4">
            Beyond the future <br />
            Your CV with us
            </h1>
        </div>
        <div class="row kotak">
            <div class="col-md-3 animate__animated animate__flipInX animate__delay-1s animate__slow">
            <div class="kotak-1"></div>
            </div>
            <div class="col-md-3">
            <div class="kotak-2 animate__animated animate__flipInY animate__delay-2s animate__slow"></div>
            </div>
        </div>
        <div class="row kotak">
            <div class="col-md-3">
            <div class="kotak-3 animate__animated animate__flipInY animate__delay-3s animate__slow"></div>
            </div>
            <div class="col-md-3">
            <div class="kotak-4 animate__animated animate__flipInX animate__delay-4s animate__slow"></div>
            </div>
        </div>
        </div>
        <div class="section-right col-12 col-md-4">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <p class="greet mb-4">Hello Kamu</p>
            </div>
            <form class="form" method="POST" action="{{route('auth.login_member')}}">
                @csrf
                <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username"
                id="username"
                value="{{ old('username') }}"/>
                </div>
                @error('username')
                <span class="bmd text-danger pl-5">{{ $message }}</span>
                @enderror

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off"
                class="form-control" value="{{old('password')}}"/>
                </div>
                @error('password')
                <span class="bmd text-danger pl-5">{{ $message }}</span>
                @enderror

                {{-- Button --}}
                <button type="submit" class="btn btn-login btn-block mt-4">
                Sign In
                </button>
                <button type="submit" class="btn btn-signup btn-block">
                <a href="{{route('signin_member')}}" style="text-decoration: none"> Sign Up </a>
                </button>
                <a href="index.html" class="btn btn-success btn-google btn-user btn-block"> <i class="fab fa-google fa-fw"></i> Login with Google </a>
                <a href="index.html" class="btn btn-danger btn-facebook btn-user btn-block"> <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook </a>
                <p class="text-center mt-3">
                <a class="reset-pass" href="#">Saya Lupa Password</a>
                </p>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    </main>
@endsection
