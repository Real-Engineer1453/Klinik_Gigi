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
            <a href="{{ route('user_officer.user_member.create') }}">Tambah Member</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nomor CM</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tgl Lahir</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.HP</th>
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
                                    <h6 class="mb-0 text-sm">{{ $um->nama }}</h6>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-xs font-weight-bold">{{ $um->nomor_cm }}</span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="text-secondary text-xs font-weight-bold">{{ $um->tanggal_lahir }}</span>
                        </td>
                        <td>
                            <p class="text-xs font-weight-bold mb-0">{{ $um->alamat }}</p>
                        </td>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">{{ $um->nomor_hp }}</p>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('user_officer.user_member.edit', $um->id ) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
        {{$data->appends(Request::all())->links()}}
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
                    made with <i class="fa fa-heart"></i> by
                    <a href="#" class="font-weight-bold" target="_blank">PKS Muda Prov. DIY</a>
                    for a better Partai 4.0.
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link text-muted" target="_blank">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
@endpush
