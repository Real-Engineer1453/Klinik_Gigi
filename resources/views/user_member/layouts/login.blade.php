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

    @include('user_member.components.style')

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <title>
    @yield('title')
  </title>
</head>

<body class="sign-in-illustration">

    @stack('navbar')

    @yield('content')

    @include('user_member.components.script')

</body>

</html>
