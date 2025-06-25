@extends('layouts.auth.app')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
                <div class="mb-4">
                    <h3>Login</h3>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group first">
                        <label for="email">Email</label>
                        <input type="email"
                            name="email"
                            id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            required >
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>
                    <div class="form-group last mb-3">
                        <label for="password">Password</label>
                        <input type="password"
                            name="password"
                            id="password"
                            class="form-control @error('password') is-invalid @enderror"
                            required
                        >
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex mb-5 align-items-center">
                    </div>
                    <button class="btn btn-block btn-success" type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
@endsection
