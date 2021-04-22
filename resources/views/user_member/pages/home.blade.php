@extends('user_member.layouts.app')

@section('title')
Real 3ngineer
@endsection

@section('content')
{{-- Content --}}
<main class="">
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
