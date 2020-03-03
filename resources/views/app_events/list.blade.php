@extends('dashboard.account')

@section('content-title')
    Event List
@endsection

@section('breadcrumb')
    @include('inc.home_links')
    <li class="breadcrumb-item active">Event List</li>
@endsection

@section('content')
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

                  <div class="row">
                    <div class="col-sm-4 mb-2">
                      <a href="{{ route('event_post', 1) }}">
                        <div class="position-relative p-3 bg-gray" style="height: 180px">
                          <div class="ribbon-wrapper">
                            <div class="ribbon bg-primary">
                              Ribbon
                            </div>
                          </div>
                          IoT Conference <br />
                          <small>Cebu City</small> <br />
                          <small>{{ \Carbon\Carbon::now()->format('F d, Y')}}</small>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-4 mb-2">
                      <a href="{{ route('event_post', 1) }}">
                        <div class="position-relative p-3 bg-gray" style="height: 180px">
                          <div class="ribbon-wrapper">
                            <div class="ribbon bg-primary">
                              Ribbon
                            </div>
                          </div>
                          IoT Conference <br />
                          <small>Cebu City</small> <br />
                          <small>{{ \Carbon\Carbon::now()->format('F d, Y')}}</small>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-4">
                      <a href="{{ route('event_post', 1) }}">
                        <div class="position-relative p-3 bg-gray" style="height: 180px">
                          <div class="ribbon-wrapper">
                            <div class="ribbon bg-primary">
                              Ribbon
                            </div>
                          </div>
                          IoT Conference <br />
                          <small>Cebu City</small> <br />
                          <small>{{ \Carbon\Carbon::now()->format('F d, Y')}}</small>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="row mt-4">
                      <div class="col-sm-4">
                        <a href="{{ route('event_post', 1) }}">
                          <div class="position-relative p-3 bg-gray" style="height: 180px">
                            <div class="ribbon-wrapper">
                              <div class="ribbon bg-primary">
                                Ribbon
                              </div>
                            </div>
                            IoT Conference <br />
                            <small>Cebu City</small> <br />
                            <small>{{ \Carbon\Carbon::now()->format('F d, Y')}}</small>
                          </div>
                        </a>
                      </div>
                  </div>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
@endsection
