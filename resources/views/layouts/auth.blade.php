<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.guest.styles')
    @stack('addon-styles')
</head>

<body>
    @yield('content')
    @include('includes.guest.scripts')

    @stack('addon-scripts')
</body>

</html>
