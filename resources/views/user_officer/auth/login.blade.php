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

<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0">
            <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder mx-auto" href=".#" rel="tooltip" data-placement="bottom">
            Login Admin Klinik
            </a>
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
                        <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
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
                        <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
