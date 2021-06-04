@extends('user_officer.layouts.app')

@section('title')
Data Pasien
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item active" aria-current="page">Data Pasien</li>
        </ol>
    </nav>
    <div class="row">
    <div class="col-12">
        <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="text-uppercase fw-bolder">Tabel Pasien</h4>
                <a href="{{ route('user_officer.user_member.create') }}" class="btn btn-success">Tambah Pasien</a>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead class="table-info">
                <tr>
                  <th class="text-uppercase text-sm font-weight-bolder ">#</th>
                  <th class="text-uppercase text-sm font-weight-bolder ">Nama</th>
                    <th class="text-center text-uppercase text-sm font-weight-bolder  ps-2">Nomor CM</th>
                    <th class="text-center text-uppercase text-sm font-weight-bolder ">Tgl Lahir</th>
                    <th class="text-center text-uppercase text-sm font-weight-bolder ">Alamat</th>
                    <th class="text-center text-uppercase text-sm font-weight-bolder ">No.HP</th>
                    <th class=""></th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $key => $um)
                    <tr>

                        <td class="align-middle text-center text-sm">
                          <span class="text-secondary text-sm font-weight-bold">{{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}</span>
                        </td>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <a href="{{ route('user_officer.user_member.show', $um->id) }}" class="mb-0 fw-bold text-sm">{{ $um->nama }}</a>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-sm font-weight-bold">{{ $um->nomor_cm }}</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-sm font-weight-bold">{{ $um->tanggal_lahir }}</span>
                        </td>
                        <td>
                            <p class="text-sm font-weight-bold mb-0">{{ $um->alamat }}</p>
                        </td>
                        <td class="align-middle text-center">
                            <p class="text-sm font-weight-bold mb-0">{{ $um->nomor_hp }}</p>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('user_officer.user_member.edit', $um->id) }}" class="badge bg-info">
                                Edit
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
      {{$data->appends(Request::all())->links()}}
    </div>
@endsection

@push('navbar')
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
<div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        {{ Form::open(['route' => ['user_officer.user_member.index'],'method'=>'GET','enctype'=>"multipart/form-data",'files'=>true]) }}
            <div class="pe-md-3 d-flex align-items-center">
                <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                  <input type="text" name="keyword" value="{{Request::get('keyword')}}" class="form-control" placeholder="Cari Nama Pasien...">
                </div>
            </div>
        {{ Form::close() }}
        <div class="mx-auto">
            <h6 class="text-uppercase fw-bolder">
                Klinik Dokter Gigi Rahma Defi
            </h6>
        </div>
        <ul class="navbar-nav justify-content-end">
            <li class="nav-item dropdown px-3 pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user me-sm-1 cursor-pointer"></i>
                    <span class="d-sm-inline d-none">{{auth()->guard('user_officer')->user()->username}}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end py-1 text-center" aria-labelledby="dropdownMenuButton">
                    <li class="mb-2">
                        <div class="">
                            <div class="justify-content-center">
                                <p class="text-warning mb-0">
                                    <a href="{{ route('auth.logout_officer') }}" class="">
                                        <i class="fa fa-clock me-1"></i>
                                        Logout</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>
<!-- End Navbar -->
@endpush
