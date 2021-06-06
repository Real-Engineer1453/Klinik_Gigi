<!--
=========================================================
* Soft UI Design System - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-design-system
* Copyright 2021 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @include('components.style')

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <title>
    @yield('title')
  </title>
</head>

<body class="index-page">

    @include('components.navbar')

    {{-- Header --}}
    <header class="header-2">
        <div class="page-header section-height-75 relative" style="background-image: url('{{ asset('front_office/assets/img/curved-images/curved.jpg')}}')">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center mx-auto">
                <h1 class="text-uppercase display-3 text-white fw-bolder mt-n5">Klinik</h1>
                <h2 class="text-white text-uppercase fw-bold pt-2">Dokter Gigi Rahma Defi</h2>
                <a href="{{ route ('login_officer')}}" class="btn btn-sm bg-gradient-info btn-round me-1 mt-3">Login</a>
            </div>
            </div>
        </div>
        <div class="position-absolute w-100 z-index-1 bottom-0">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="moving-waves">
                <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
            </g>
            </svg>
        </div>
        </div>
    </header>

    @include('components.script')

</body>

</html>
