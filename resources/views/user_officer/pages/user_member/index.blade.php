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
            <div class="d-flex justify-content-between align-items-center">
                <h6>Tabel Pasien</h6>
                <a href="{{ route('user_officer.user_member.create') }}" class="badge bg-success">Tambah Member</a>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Nomor CM</th>
                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Tgl Lahir</th>
                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-center text-uppercase text-secondary text-sm font-weight-bolder opacity-7">No.HP</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $um)
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <a href="#" class="mb-0 fw-bold text-sm">{{ $um->nama }}</a>
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
    </div>
    </div>
</div>
@endsection

@push('footer')
<footer class="footer pt-9">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-left">
                    © <script>
                    document.write(new Date().getFullYear())
                    </script>,
                    made by
                    <a href="#" class="font-weight-bold" target="_blank">Klinik Gigi Rahma Defi</a>
                </div>
            </div>
        </div>
    </div>
</footer>
@endpush
