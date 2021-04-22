<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>

        @include('user_member.includes.style')
        @stack('addon-style')
    </head>

    <body class="user">
        @include('user_member.includes.navbar')

        @yield('content')

        @include('user_member.includes.script')
    </body>
</html>
