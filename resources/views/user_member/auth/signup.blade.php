@extends('user_member.layouts.signup')

@section('title')
Registrasi
@endsection

@section('content')
<section class="h-100-vh mb-8">
  <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('front_office/assets/img/curved-images/curved14.jpg');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5 text-center mx-auto">
          <h1 class="text-white mb-2 mt-5">Welcome!</h1>
          <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row mt-lg-n10 mt-md-n11 mt-n10">
      <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
        <div class="card z-index-0">
          <div class="card-header text-center pt-4">
            <h5>Register with</h5>
          </div>
          <div class="row px-xl-5 px-sm-4 px-3">
            <div class="col-3 ms-auto px-1">
              <a class="btn btn-outline-light w-100" href="javascript:;">
                <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink32">
                  <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="facebook-3" transform="translate(3.000000, 3.000000)" fill-rule="nonzero">
                      <circle id="Oval" fill="#3C5A9A" cx="29.5091719" cy="29.4927506" r="29.4882047"></circle>
                      <path d="M39.0974944,9.05587273 L32.5651312,9.05587273 C28.6886088,9.05587273 24.3768224,10.6862851 24.3768224,16.3054653 C24.395747,18.2634019 24.3768224,20.1385313 24.3768224,22.2488655 L19.8922122,22.2488655 L19.8922122,29.3852113 L24.5156022,29.3852113 L24.5156022,49.9295284 L33.0113092,49.9295284 L33.0113092,29.2496356 L38.6187742,29.2496356 L39.1261316,22.2288395 L32.8649196,22.2288395 C32.8649196,22.2288395 32.8789377,19.1056932 32.8649196,18.1987181 C32.8649196,15.9781412 35.1755132,16.1053059 35.3144932,16.1053059 C36.4140178,16.1053059 38.5518876,16.1085101 39.1006986,16.1053059 L39.1006986,9.05587273 L39.0974944,9.05587273 L39.0974944,9.05587273 Z" id="Path" fill="#FFFFFF"></path>
                    </g>
                  </g>
                </svg>
              </a>
            </div>
            <div class="col-3 me-auto px-1">
              <a class="btn btn-outline-light w-100" href="{{ url('auth/google') }}">
                <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="google-icon" transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                      <path d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267" id="Path" fill="#4285F4"></path>
                      <path d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667" id="Path" fill="#34A853"></path>
                      <path d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782" id="Path" fill="#FBBC05"></path>
                      <path d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769" id="Path" fill="#EB4335"></path>
                    </g>
                  </g>
                </svg>
              </a>
            </div>
            <div class="mt-2 position-relative text-center">
              <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                or
              </p>
            </div>
          </div>
          <div class="card-body">
              {{-- Form Regist --}}
            <form role="form text-left" class="form" method="POST" action="{{route('auth.signup_member')}}">
              @csrf
              <div class="mb-3">
                <input class="form-control" type="text" name="name" placeholder="Nama"
                  id="name" value="{{ old('name')}}">
              </div>
              @error('name')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror

              <div class="mb-3">
                <input class="form-control " placeholder="Email" type="text" name="email"
                  id="email" value="{{ old('email')}}">
              </div>
              @error('email')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror

              <div class="mb-3">
                <input class="form-control" placeholder="Phone Number" type="text" name="phone_number"
                  id="phone_number" value="{{ old('phone_number')}}">
              </div>
              @error('phone_number')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror

              <div class="mb-3">
                <input type="password" placeholder="Password" name="password" id="password"
                  class="form-control" value="{{old('password')}}">
              </div>
              @error('password')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror

              <div class="mb-3">
                <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" autocomplete="off"
                  class="form-control" value="{{old('confirm_password')}}">
              </div>
              @error('confirm_password')
              <span class="bmd text-danger pl-5">{{ $message }}</span>
              @enderror

              <div class="form-check form-check-info text-left">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                  I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                </label>
              </div>

              <div class="text-center">
                <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2">Sign up</button>
              </div>
              <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{route('login_member')}}" class="text-warning font-weight-bolder">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('navbar')
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0  z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
            <div class="container-fluid">
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link font-weight-bolder d-flex align-items-center me-2 active" aria-current="page" href="{{ route('home')}}">
                            REGISTRASI PKS MUDA DIGITAL BASECAMP
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        </div>
    </div>
</div>
@endpush

@push('footer')
<footer class="footer py-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-dribbble"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-twitter"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-instagram"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-pinterest"></span>
                </a>
                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                <span class="text-lg fab fa-github"></span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                © <script>
                    document.write(new Date().getFullYear())
                </script>
                made with <i class="fa fa-heart"></i> by
                <a href="#" class="font-weight-bold" target="_blank">PKS Muda Prov. DIY</a>
                for a better Partai 4.0.
                </p>
            </div>
        </div>
    </div>
</footer>
@endpush
