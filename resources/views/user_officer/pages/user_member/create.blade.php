@extends('user_officer.layouts.app')

@section('title')
Tambah data Pasien
@endsection

@section('content')
   <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
        <li class="breadcrumb-item"><a href="{{ route('user_officer.user_member.index') }}">Data Pasien</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
        </ol>
    </nav>
    <div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="text-uppercase fw-bolder">Tambah Data Pasien</h5>
            </div>
            <div class="card-body px-0 pt-0 pb-2 mt-4">
                {{ Form::open(['route' => ['user_officer.user_member.store'],'method'=>'POST','enctype'=>"multipart/form-data",'files'=>true]) }}
                <div class="row ms-auto">
                    <label for="nama" class="col-sm-2 col-form-label">Nama*</label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            {{ Form::text('nama', null, [
                                    'id'=>"nama" ,
                                    'class' => 'form-control',
                                    'placeholder' => '...'
                                ])
                            }}
                            @error('nama')
                            <span class="bmd text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row ms-auto">
                    <label for="nomor_cm" class="col-sm-2 col-form-label">Nomor CM*</label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            {{ Form::text('nomor_cm', null, [
                                    'id'=>"nomor_cm" ,
                                    'class' => 'form-control',
                                    'placeholder' => '...'
                                ])
                            }}
                            @error('nomor_cm')
                            <span class="bmd text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row ms-auto">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir*</label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            {{ Form::text('tanggal_lahir', null, [
                                    'id'=>"tanggal_lahir" ,
                                    'class' => 'form-control datepicker',
                                    'placeholder' => 'Tanggal Lahir'
                                ])
                            }}
                            @error('tanggal_lahir')
                            <span class="bmd text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row ms-auto">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat *</label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            {{ Form::text('alamat', null, [
                                    'id'=>"alamat" ,
                                    'class' => 'form-control',
                                    'placeholder' => '...'
                                ])
                            }}
                            @error('alamat')
                            <span class="bmd text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row ms-auto">
                    <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP </label>
                    <div class="col-sm-9">
                        <div class="form-group">
                            {{ Form::text('nomor_hp', null, [
                                    'id'=>"nomor_hp" ,
                                    'class' => 'form-control',
                                    'placeholder' => '...'
                                ])
                            }}
                            @error('nomor_hp')
                            <span class="bmd text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <input class="btn btn-info btn-sm" type="submit" value="Simpan" />
                    <a href="{{ route('user_officer.user_member.index') }}" class="btn btn-danger btn-sm">Back</a>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    </div>
@endsection

@push('navbar')
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
<div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div>
            <h6 class="text-uppercase fw-bolder">
                Klinik Dokter Gigi Rahma Defi
            </h6>
        </div>
        <div class="mx-auto"></div>
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