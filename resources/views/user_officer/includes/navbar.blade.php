<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
<div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="pe-md-3 d-flex align-items-center">
            <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Cari...">
            </div>
        </div>
        <div class="mx-auto">
            <a class="nav-link
                @if (\Request::is('user_officer/user_member*'))
                active
                @endif"
                href="{{ route('user_officer.user_member.index') }}">
                <span class="nav-link-text ms-1 fw-bolder text-uppercase">Data Pasien</span>
            </a>
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
