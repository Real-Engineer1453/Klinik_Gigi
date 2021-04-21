<h3>Login Officer</h3>
<a href="{{route('home')}}">Home</a>

@if(Session::has('notification_register'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session('notification_register') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<form class="form" method="POST" action="{{route('auth.login_officer')}}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control " placeholder="Username" type="text" name="username"
                   id="username"
                   value="{{ old('username') }}">
            </div>
            @error('username')
            <span class="bmd text-danger pl-5">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" id="password" autocomplete="off"
                       class="form-control" value="{{old('password')}}" />
            </div>
            @error('password')
            <span class="bmd text-danger pl-5">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="modal-footer my-4 justify-content-center">
        <button type="submit" class="btn btn-info  btn-wd ">Login</button>
    </div>
</form>
