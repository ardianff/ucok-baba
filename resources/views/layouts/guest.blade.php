<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.guest.styles')
    @stack('addon-styles')
</head>

<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                @include('includes.guest.header')
                @yield('content')
            </main>
        </div>
        <div id="layoutDefault_footer">
            @include('includes.guest.footer')
        </div>
    </div>
    @include('includes.guest.scripts')
    @stack('addon-scripts')
</body>

</html>
