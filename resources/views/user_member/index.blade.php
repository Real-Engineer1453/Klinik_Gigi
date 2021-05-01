<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    @include('user_member.components.dashboard.style')

    <title>
        @yield('title')
    </title>
</head>

<body class="">
  <div class="wrapper ">

    @include('user_member.components.dashboard.sidebar')

    <div class="main-panel">

        @include('user_member.components.dashboard.navbar')

        @yield('content')

        @include('user_member.components.dashboard.footer')

    </div>
  </div>

    @include('user_member.components.dashboard.script')

</body>

</html>
