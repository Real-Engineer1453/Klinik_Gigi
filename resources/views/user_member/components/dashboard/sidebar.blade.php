{{-- Sidebar --}}
<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
        <div class="logo-image-small">
        <img src="{{ url ('dashboard_member/assets/img/logo-small.png')}}">
        </div>
        <!-- <p>CT</p> -->
    </a>
    <a href="#" class="simple-text logo-normal">
        {{auth()->guard('user_member')->user()->name }}
        <!-- <div class="logo-image-big">
        <img src="../assets/img/logo-big.png">
        </div> -->
    </a>
    </div>
    <div class="sidebar-wrapper">
    <ul class="nav">
        <li class="active ">
        <a href="#">
            <i class="nc-icon nc-single-02"></i>
            <p>User Profile</p>
        </a>
        </li>
        <li>
        <a href="./tables.html">
            <i class="nc-icon nc-tile-56"></i>
            <p>Table List</p>
        </a>
        </li>
        <li>
        <a href="./notifications.html">
            <i class="nc-icon nc-bell-55"></i>
            <p>Notifications</p>
        </a>
        </li>
    </ul>
    </div>
</div>
