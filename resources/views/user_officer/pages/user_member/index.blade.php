@extends('user_officer.layouts.app')

@section('title')
Data Member
@endsection

@section('content')
<div class="container-fluid py-4">
    <div class="row">
    <div class="col-12">
        <div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Members Table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Domisili</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Peminatan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Regist</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $um)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="{{ url ('back_office/assets/img/team-2.jpg')}}" class="avatar avatar-sm me-3">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">{{ $um->name }}</h6>
                                    <p class="text-xs text-secondary mb-0">{{ $um->username }}, {{ $um->email }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">DIY</p>
                            <p class="text-xs text-secondary mb-0">Sleman</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">SMBK</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">28/04/21</span>
                        </td>
                        <td class="align-middle">
                            <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                            </a>
                            <a href="#" class="text-secondary font-weight-bold text-xs ms-2" data-toggle="tooltip" data-original-title="Edit user">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection
