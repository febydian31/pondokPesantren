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
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group first">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button class="btn btn-block btn-success" type="submit">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
