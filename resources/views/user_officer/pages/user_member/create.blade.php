@extends('user_officer.layouts.app')

@section('title')
Data Member
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
