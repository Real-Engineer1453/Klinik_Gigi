@extends('user_member.layouts.app')

@section('title')
Real 3ngineer
@endsection

@section('content')
{{-- Content --}}
<main class="">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="box"></div>
    </div>

    <table>
    <tr>
        <td>Name</td>
        <td>: {{$data->name}}</td>
    </tr>
    <tr>
        <td>Username</td>
        <td>: {{$data->username}}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>: {{$data->address}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>: {{$data->email}}</td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td>: {{$data->phone_number}}</td>
    </tr>
    <tr>
        <td><a href="{{route('auth.logout_member')}}">Logout</a></td>
    </tr>
</table>
</main>
@endsection

@push('addon-style')
<style>
    :root {
    --background: #f8f8f8;
    --dark: #303032;
    }

    .box-container {
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--background);
    }

    .box {
    position: relative;
    background: var(--dark);
    border: 0.15rem solid var(--dark);
    width: 8rem;
    height: 8rem;
    outline: 0;
    overflow: hidden;
    transform: translateY(200%);
    }

    .box::before {
    content: 'M';
    font-size: 3.5rem;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--background);
    }

    .box::after {
    content: '';
    position: absolute;
    bottom: -50%;
    left: -50%;
    height: 200%;
    width: 200%;
    background: var(--background);
    border-radius: 45%;
    animation: spin 5s ease-in-out infinite;
    }

    @keyframes spin {
    0% {
        transform: translateY(0) rotate(0deg);
    }
    100% {
        transform: translateY(-100%) rotate(500deg);
    }
    }
</style>
@endpush
