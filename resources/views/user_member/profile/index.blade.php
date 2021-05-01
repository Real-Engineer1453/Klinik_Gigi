@extends('user_member.index')

@section('title')
User Profile
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="{{ url ('dashboard_member/assets/img/damir-bosnjak.jpg')}}" alt="dashboard_member.">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="{{ url ('dashboard_member/assets/img/logo-small.png')}}" alt="dashboard_member.">
                            <h5 class="title">{{ $data->name }}</h5>
                        </a>
                        <p class="description">
                        {{ $data->email }}
                        </p>
                    </div>
                    <p class="description m-0 text-center">
                        {{ $data->address }}
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Team Members</h4>
                </div>
                <div class="card-body">
                <ul class="list-unstyled team-members">
                    <li>
                    <div class="row">
                        <div class="col-md-2 col-2">
                        <div class="avatar">
                            <img src="{{ url ('dashboard_member/assets/img/logo-small.png')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                        </div>
                        <div class="col-md-7 col-7 title">
                        Fulan
                        <br />
                        <span class="text-info"><small>Ngopi</small></span>
                        </div>
                        <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="row">
                        <div class="col-md-2 col-2">
                        <div class="avatar">
                            <img src="{{ url ('dashboard_member/assets/img/logo-small.png')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                        </div>
                        <div class="col-md-7 col-7 title">
                        Fulan
                        <br />
                        <span class="text-info"><small>SMBK</small></span>
                        </div>
                        <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="row">
                        <div class="col-md-2 col-2">
                        <div class="avatar">
                            <img src="{{ url ('dashboard_member/assets/img/logo-small.png')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                        </div>
                        <div class="col-ms-7 col-7 title">
                        Fulan
                        <br />
                        <span class="text-info"><small>Pemuda Religi</small></span>
                        </div>
                        <div class="col-md-3 col-3 text-right">
                        <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                        </div>
                    </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
            <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body">
            <form>
                <div class="row">
                <div class="col-md-5 pr-1">
                    <div class="form-group">
                    <label>Company (disabled)</label>
                    <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                    </div>
                </div>
                <div class="col-md-3 px-1">
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" value="{{ $data->username }}">
                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" placeholder="Email" value="{{ $data->email }}">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 pr-1">
                    <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Full Name" value="{{ $data->name }}">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Home Address" value="{{ $data->address }}">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" placeholder="City" value="Melbourne">
                    </div>
                </div>
                <div class="col-md-4 px-1">
                    <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" placeholder="Country" value="Australia">
                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                    <label>Postal Code</label>
                    <input type="number" class="form-control" placeholder="ZIP Code">
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>About Me</label>
                    <textarea class="form-control textarea">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, nam!</textarea>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
