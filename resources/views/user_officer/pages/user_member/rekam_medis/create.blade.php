@extends('user_officer.layouts.app')

@section('title')
  Tambah Rekam Medis
@endsection

@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent">
      <li class="breadcrumb-item"><a href="{{ route('user_officer.user_member.index') }}">Data Pasien</a></li>
      <li class="breadcrumb-item">Rekam Medis</li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Rekam Medis</li>
    </ol>
  </nav>
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h5 class="text-uppercase fw-bolder">Tambah Rekam Medis Pasien</h5>
            <div class="d-flex justify-content-between">
              <h6>{{ $data_member->nama }}</h6>
              <h6>{{ $data_member->nomor_cm }}</h6>
              <h6>{{ $data_member->tanggal_lahir }}</h6>
              <h6>{{ $data_member->alamat }}</h6>
              <h6>{{ $data_member->nomor_hp }}</h6>
            </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2 mt-4">
            {{ Form::open(['route' => ['user_officer.rekam_medis.store', $data_member->id],'method'=>'POST','enctype'=>"multipart/form-data",'files'=>true]) }}
            {{ Form::hidden('id',$data_member->id) }}

            <div class="row ms-auto">
              <label for="anamnesa" class="col-sm-2 col-form-label">anamnesa *</label>
              <div class="col-sm-9">
                <div class="form-group">
                  {{ Form::textarea('anamnesa', null, [
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
                  {{ Form::text('riwayat_alergi', null, [
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
                  {{ Form::text('tindakan', null, [
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
                  {{ Form::text('terapi_obat', null, [
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
