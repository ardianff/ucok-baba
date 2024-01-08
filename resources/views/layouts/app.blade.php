<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.admin.styles')
    @stack('addon-styles')
</head>

<body>
    @if (Auth::user()->role == 'ADMIN')
        @include('includes.admin.sidebar')
    @elseif (Auth::user()->role == 'KLINIK')
        @include('includes.petugas.sidebar')
    @endif
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('includes.admin.header')
        @yield('content')
        @include('includes.admin.footer')
    </div>
    {{-- @include('sweetalert::alert') --}}
    @include('includes.admin.scripts')
    @stack('addon-scripts')
    <div id="Popup"></div>
</body>

</html>
