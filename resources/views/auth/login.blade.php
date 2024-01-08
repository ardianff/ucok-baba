@extends('layouts.auth')
@push('addon-styles')
    <style type="text/css">
        .login-bg {
            height: 100%;
            width: 100%;
            position: absolute;
            background-image: url('http://119.2.50.170:9095/sim-klinik/asset/img/bg-tugumuda2.jpg');
            opacity: 0.8;
            background-repeat: no-repeat;
            background-size: 100%;
        }

        #back {
            background-color: white;
            position: relative;
            opacity: 1;
        }
    </style>
@endpush
@section('content')
    <div class="login-bg"></div>
    <div class="bg-transparent min-vh-100 d-flex flex-row align-items-center" id="back">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card-group d-block d-md-flex row">

                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1 id="nama_klinik"></h1>
                                <form action="{{ route('login') }}" method="post" class="mt-5">
                                    @csrf
                                    {{-- <div class="input-group mb-3"><span class="input-group-text">
                                            <i class="fa-light fa-user"></i>
                                        </span>
                                        <input class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Alamat Email">
                                        @error('email')
                                            <div class="alert alert-danger rounded mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div> --}}
                                    <div class="input-group mb-3"><span class="input-group-text">
                                            <i class="fa-light fa-user"></i>
                                        </span>
                                        <input class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" required autocomplete="username" autofocus
                                            placeholder="Username">
                                        @error('username')
                                            <div class="alert alert-danger rounded mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-4"><span class="input-group-text">
                                            <i class="fa-light fa-lock"></i>
                                        </span>
                                        <input class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Password" type="password">
                                        @error('password')
                                            <div class="alert alert-danger rounded mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                Ingat saya
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">Masuk</button>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <div class="col-6 text-end">
                                                <a class="btn btn-link px-0 text-decoration-none"
                                                    href="{{ route('password.request') }}">
                                                    Lupa Password
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card col-md-5 text-white bg-primary py-3" style="opacity:1">
                            <div class="card-body text-center opacity-100">
                                <div>
                                    <h2>{{ ucwords(config('app.name')) }}</h2>
                                    <h6>Dinas Kesehatan Kota Semarang</h6>
                                    <img src="{{ url('admin/assets/img/pemkot.png') }}" alt="logo pemkot"
                                        class=" img-fluid mt-4" width="150" height="150">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ url('js/sweetalert2.all.min.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/sweetalert2.min.css') }}">
@endpush
