@extends('layouts.auth')
@section('title')
  Admin Register
@endsection
@section('content')
<div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>Doodhnath</b>Register</a>
    </div>
  
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        @if(Session::has('error'))
            <div class="bg-danger"><p>{{Session::get('error')}}</p></div>
        @endif 
        <form action="/user-create" method="post">
          @csrf  
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="fullname" placeholder="Full name">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
          </div>
          @if(@$errors->has('fullname'))
            <div class="bg-danger"><p>{{$errors->first('fullname')}}</p></div>
          @endif
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
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="repassword" placeholder="Retype password">
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
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                 I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <a href="/login" class="text-center">I already have a account</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection

