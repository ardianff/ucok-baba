<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ config('app.detail') }}">
<meta name="author" content="Ardian F Firmansyah">
<meta name="keyword" content="{{ config('app.name') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<!-- Disable tap highlight on IE -->
<meta name="msapplication-tap-highlight" content="no">
{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
<title>{{ config('app.name', 'Laravel') }}
    @if (Request::segment(1) == 'login')
        | {{ ucfirst(Request::segment(1)) }}
    @else
        | {{ ucfirst(Request::segment(2)) }}
    @endif
</title>
<link rel="icon" href="https://semarangkota.go.id/assets/img/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="https://semarangkota.go.id/assets/img/favicon.png" type="image/x-icon" />
<link href="{{ url('css/styles.css') }}" rel="stylesheet" />
<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous">
</script>
