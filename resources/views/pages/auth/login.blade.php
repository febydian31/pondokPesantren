@extends('layouts.auth.app')
@section('content')
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="mb-4">
              <h3>Login</h3>
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username">

              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
              </div>
              <div class="d-flex mb-5 align-items-center">
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-success">
            </form>
          </div>
        </div>
      </div>

@endsection