<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    @include('inc.navbar')
    @include('inc.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>
                @yield('content-title')
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                @yield('breadcrumb')
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      
      {{-- Sample logout --}}
      {!! Form::open(['route' => 'logout']) !!}
      <button class="btn btn-danger">Logout</button>
      {!! Form::close() !!}

      
      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('inc.footer')

  </div>


<!-- jQuery, Bootstrap 4, AdminLTE -->
<script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
