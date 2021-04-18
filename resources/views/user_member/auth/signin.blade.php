<h3>Signin Member</h3>
<form class="form" method="POST" action="{{route('auth.signin_member')}}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <div class="input-group">
                <input class="form-control " placeholder="Name" type="text" name="name"
                   id="name"
                   value="{{ old('name')}}">
            </div>
            @error('name')
            <span class="bmd text-danger pl-5">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control " placeholder="Email" type="text" name="email"
                   id="email"
                   value="{{ old('email')}}">
            </div>
            @error('email')
            <span class="bmd text-danger pl-5">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="input-group">
                <input class="form-control " placeholder="Phone Number" type="text" name="phone_number"
                       id="phone_number"
                       value="{{ old('phone_number')}}">
            </div>
            @error('phone_number')
            <span class="bmd text-danger pl-5">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" id="password"
                       class="form-control" value="{{old('password')}}" />
            </div>
            @error('password')
            <span class="bmd text-danger pl-5">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password" autocomplete="off"
                       class="form-control" value="{{old('confirm_password')}}" />
            </div>
            @error('confirm_password')
            <span class="bmd text-danger pl-5">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="modal-footer my-4 justify-content-center">
        <button type="submit" class="btn btn-info  btn-wd ">Signin</button>
        <a href="{{route('login_member')}}">Login</a>
    </div>
</form>
