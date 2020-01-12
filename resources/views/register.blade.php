@extends('account')

@section('content')
<div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>REGISTER</b></a>
    </div>
  
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="../../index.html" method="post">
        <div class="row mx-md-n5">
            <div class="col px-md-5 radio icheck-peterriver icheck-inline">
                <input type="radio" id="peterriver1" name="peterriver" />
                <label for="peterriver1">Event Organizer</label>
            </div>
            <div class="col radio icheck-peterriver icheck-inline">
                <input type="radio" checked id="peterriver2" name="peterriver" />
                <label for="peterriver2">Expert</label>
            </div>
        </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </form>
        <div class="col text-center">
            <a href="login.html">I already have an account</a>
        </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection