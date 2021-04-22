{{-- Navbar --}}
    <section class="container">
        <nav class="navbar navbar-user navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Mailmaker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Hello Kamu</a>
            </li>
            </ul>
            <p class="pr-3 pt-3">{{$data->name}}</p>
            <a href="{{route('auth.logout_member')}}">
                <button class="btn-primary">Logout</button>
            </a>
        </div>
        </nav>
    </section>
