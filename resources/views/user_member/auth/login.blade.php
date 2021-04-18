<form class="form" method="POST" action="{{route('auth.login_member')}}">
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
