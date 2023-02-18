@extends('layouts.auth')
@section('title')
  Admin Login
@endsection
@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href=""><b>Doodhnath</b>Admin</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign In</p>

        @if(Session::has('error_password'))
            <div class="bg-danger"><p>{{Session::get('error_password')}}</p></div>
        @endif 
        @if(Session::has('error_email'))
            <div class="bg-danger"><p>{{Session::get('error_email')}}</p></div>
        @endif 
        <form action="/user-login" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @if(@$errors->has('email'))
             <div class="bg-danger"><p>{{$errors->first('email')}}</p></div>
          @endif
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @if(@$errors->has('password'))
             <div class="bg-danger"><p>{{$errors->first('password')}}</p></div>
          @endif
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <div class="social-auth-links text-center mb-3">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div>
        <!-- /.social-auth-links -->
  
        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="/register" class="text-center">Register a new account</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection

