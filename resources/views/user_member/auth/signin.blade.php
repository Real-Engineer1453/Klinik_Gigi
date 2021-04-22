@extends('user_member.layouts.login')

@section('title')
Registrasi
@endsection

@section('content')
<main class="regist-container">
    <div class="container">
    <div class="row page-regist d-flex align-items-center justify-content-center">
        <div class="section-regist col-12 col-md-6">
        <div class="card">
            <div class="card-body">
            <div class="text-center">
                <p class="greet mb-4">Daftar Sini</p>
            </div>
            <form class="form" method="POST" action="{{route('auth.signin_member')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name"
                    id="name" value="{{ old('name')}}" />
                </div>
                @error('name')
                <span class="bmd text-danger pl-5">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="email">Email Adress</label>
                    <input class="form-control " type="text" name="email"
                    id="email" value="{{ old('email')}}" />
                </div>
                @error('email')
                <span class="bmd text-danger pl-5">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="phone_number">No. HP</label>
                    <input class="form-control" type="text" name="phone_number"
                    id="phone_number" value="{{ old('phone_number')}}" />
                </div>
                @error('phone_number')
                <span class="bmd text-danger pl-5">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                    class="form-control" value="{{old('password')}}" />
                </div>
                @error('password')
                <span class="bmd text-danger pl-5">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" autocomplete="off"
                    class="form-control" value="{{old('confirm_password')}}" />
                </div>
                @error('confir_password')
                <span class="bmd text-danger pl-5">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn btn-signup btn-block">Sign Up</button>
                <a href="{{route('login_member')}}">Login</a>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</main>
@endsection
