@extends('user_officer.layouts.app')

@section('title')
Show Rekam Medis
@endsection

@section('content')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent">
      <li class="breadcrumb-item"><a href="{{ route('user_officer.user_member.index') }}">Data Pasien</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rekam Medis</li>
    </ol>
  </nav>
    <div class="row">
    <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="d-flex">
              <h4 class="text-uppercase fw-bolder">Rekam Medis Pasien</h4>
              <div class="mx-auto"></div>
              <a href="{{ route('user_officer.user_member.index') }}" class="btn btn-danger btn-sm me-3">Kembali</a>
              <a href="{{ route('user_officer.rekam_medis.create', $data_user->id) }}" class="btn btn-info btn-sm">Tambah</a>
            </div>
            <div>
              <h5 class="badge bg-success">Identitas Pasien</h5>
              <div class="d-flex justify-content-between">
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

                  <!-- Modal -->
                  <div class="modal fade" id="modal{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                            <div class="col">
                              <p>{{ $d->anamnesa }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn bg-gradient-primary">Save changes</button>
                          <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <tr>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-sm font-weight-bold">{{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}</span>
                    </td>
                    <td class="align-middle text-sm" style="word-wrap: break-word">

                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-sm bg-gradient-primary" data-bs-toggle="modal"
                              data-bs-target="#modal{{ $d->id }}">
                        Detail
                      </button>
                      &nbsp;
                      <span class="text-secondary text-sm font-weight-bold">{{ Str::limit($d->anamnesa, 20) }}</span>

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
                      <a href="{{ route('user_officer.rekam_medis.edit', $d->id) }}" class="badge bg-info">
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
@endsection
