@extends('user_officer.layouts.app')

@section('title')
Show Rekam Medis
@endsection

@section('content')
<div class="container-fluid py-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-white">
      <li class="breadcrumb-item"><a href="{{ route('user_officer.user_member.index') }}">Data Pasien</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rekam Medis</li>
    </ol>
  </nav>
    <div class="row">
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="">
              <a href="{{ route('user_officer.user_member.index') }}" class="badge bg-danger">Kembali</a>
              <a href="#" class="badge bg-info">Tambah</a>
                <h4 class="mt-2 text-uppercase fw-bolder">Rekam Medis Pasien</h4>
                <div class="mt-2 d-flex justify-content-between">
                  <h6>{{ $data_user->nama }}</h6>
                  <h6>{{ $data_user->nomor_cm }}</h6>
                  <h6>{{ $data_user->tanggal_lahir }}</h6>
                  <h6>{{ $data_user->alamat }}</h6>
                  <h6>{{ $data_user->nomor_hp }}</h6>
            </div>
            </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead class="table-info">
                <tr>
                  <th class="text-uppercase text-sm font-weight-bolder">#</th>
                  <th class="text-uppercase text-sm font-weight-bolder">anamnesa</th>
                  <th class="text-uppercase text-sm font-weight-bolder">riwayat_alergi</th>
                  <th class="text-uppercase text-sm font-weight-bolder">tindakan</th>
                  <th class="text-uppercase text-sm font-weight-bolder">terapi_obat</th>
                  <th class="text-uppercase text-sm font-weight-bolder">action</th>
                </tr>
                </thead>
                <tbody>
              
                @foreach($data as $key => $d)
                  <tr>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-sm font-weight-bold">{{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}</span>
                    </td>
                    <td class="align-middle text-sm">
                      <span class="text-secondary text-sm font-weight-bold">{{ $d->anamnesa }}</span>
                    </td>
                    <td class="align-middle text-sm">
                      <span class="text-secondary text-sm font-weight-bold">{{ $d->riwayat_alergi }}</span>
                    </td>
                    <td class="align-middle text-sm">
                      <span class="text-secondary text-sm font-weight-bold">{{ $d->tindakan }}</span>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">{{ $d->terapi_obat }}</p>
                    </td>
                    <td class="align-middle">
                      <a href="#" class="badge bg-info">
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
      {{$data->appends(Request::all())->links()}}
    </div>
    </div>
</div>
@endsection