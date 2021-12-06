<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        {{-- Style --}}
        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                {{-- Content --}}
                @yield('content')
            </div>
            <div id="layoutAuthentication_footer">
                {{-- Footer --}}
                @include('auth.footer')
            </div>
        </div>
        {{-- Script --}}
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')
    </body>
</html>
