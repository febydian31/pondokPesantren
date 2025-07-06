@extends('layouts.auth.app', ['title' => 'Halaman Masuk'])

@section('content')
    <img src="{{ asset('images/cover.jpg') }}" alt="Gambar Login" class="bg order-1 order-md-2 img-fluid">

    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h3>Halaman Masuk</strong></h3>
                    <p class="mb-4">Selamat datang di halaman masuk. Silakan masukkan email dan password anda.
                    </p>

                    @if (session('login_error'))
                        <div class="alert alert-danger">
                            {{ session('login_error') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label>Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-block btn-success" type="submit">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
