@extends('user_officer.layouts.app')

@section('title')
Edit Rekam Medis
@endsection

@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent">
      <li class="breadcrumb-item"><a href="{{ route('user_officer.user_member.index') }}">Data Pasien</a></li>
      <li class="breadcrumb-item">Rekam Medis</li>
      <li class="breadcrumb-item active" aria-current="page">EditRekam Medis</li>
    </ol>
  </nav>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h5 class="text-uppercase fw-bolder">Edit Rekam Medis Pasien</h5>
            <div class="d-flex justify-content-between">
              <h6 class="badge bg-primary">{{ $data_member->nama }}</h6>
              <h6>{{ $data_member->nomor_cm }}</h6>
              <h6>{{ $data_member->tanggal_lahir }}</h6>
              <h6>{{ $data_member->alamat }}</h6>
              <h6>{{ $data_member->nomor_hp }}</h6>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2 mt-4">
            {{ Form::open(['route' => ['user_officer.rekam_medis.update', $data->id],'method'=>'PUT','enctype'=>"multipart/form-data",'files'=>true]) }}
            {{ Form::hidden('id',$data_member->id) }}

            <div class="row ms-auto">
              <label for="anamnesa" class="col-sm-2 col-form-label">anamnesa *</label>
              <div class="col-sm-9">
                <div class="form-group">
                  {{ Form::textarea('anamnesa', $data->anamnesa, [
                          'id'=>"anamnesa" ,
                          'class' => 'form-control',
                          'placeholder' => '...'
                      ])
                  }}
                  @error('anamnesa')
                  <span class="bmd text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row ms-auto">
              <label for="riwayat_alergi" class="col-sm-2 col-form-label">riwayat_alergi *</label>
              <div class="col-sm-9">
                <div class="form-group">
                  {{ Form::text('riwayat_alergi', $data->riwayat_alergi, [
                          'id'=>"riwayat_alergi" ,
                          'class' => 'form-control',
                          'placeholder' => '...'
                      ])
                  }}
                  @error('riwayat_alergi')
                  <span class="bmd text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row ms-auto">
              <label for="tindakan" class="col-sm-2 col-form-label">tindakan *</label>
              <div class="col-sm-9">
                <div class="form-group">
                  {{ Form::text('tindakan', $data->tindakan, [
                          'id'=>"tindakan" ,
                          'class' => 'form-control',
                          'placeholder' => '...'
                      ])
                  }}
                  @error('tindakan')
                  <span class="bmd text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="row ms-auto">
              <label for="terapi_obat" class="col-sm-2 col-form-label">terapi_obat *</label>
              <div class="col-sm-9">
                <div class="form-group">
                  {{ Form::text('terapi_obat', $data->terapi_obat, [
                          'id'=>"terapi_obat" ,
                          'class' => 'form-control',
                          'placeholder' => '...'
                      ])
                  }}
                  @error('terapi_obat')
                  <span class="bmd text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
            </div>

            <div class="text-center">
              <input class="btn btn-info btn-sm" type="submit" value="Simpan" />
              <a href="{{ route('user_officer.user_member.show', $data_member->id) }}" class="btn btn-danger btn-sm">Back</a>
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
