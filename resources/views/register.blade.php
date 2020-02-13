@extends('account')

@section('content')
<div class="register-box">

    @include('inc.alert')

    <div class="register-logo">
      <a href="../../index2.html"><b>REGISTER</b></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        {!! Form::open(['route' => 'register']) !!}
        <div class="row mx-md-n5">
            <div class="col px-md-5 radio icheck-peterriver icheck-inline">
                <input type="radio" name="user_type" id="radEventOrg" value="Event Organizer" />
                <label for="radEventOrg">Event Organizer</label>
            </div>
            <div class="col radio icheck-peterriver icheck-inline">
                <input type="radio" name="user_type" id="radExpert" value="Expert" checked/>
                <label for="radExpert">Expert</label>
            </div>
        </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $email ?? ''}}" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        {!! Form::close() !!}
        <div class="col text-center">
            <a href="{{ route('login') }}">I already have an account</a>
        </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
@endsection
