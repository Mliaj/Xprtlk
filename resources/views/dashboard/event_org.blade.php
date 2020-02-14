@extends('dashboard.account')

@section('content-title')
    Home
@endsection

@section('breadcrumb')
  <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
    <div class="container-fluid">
      <div class="container-fluid">
        
        <div class="text-right mb-2">
          <a href="{{ route('event_create') }}" class="btn btn-primary">Add Event</a>
        </div>

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
                      Ribbon Default <br />
                      <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                    </div>
                  </a>
                  </div>
                  <div class="col-sm-4 mb-2">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper">
                          <div class="ribbon bg-primary">
                            Cancelled
                          </div>
                        </div>
                        Ribbon Default <br />
                        <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="position-relative p-3 bg-gray" style="height: 180px">
                        <div class="ribbon-wrapper">
                          <div class="ribbon bg-primary">
                            Ribbon
                          </div>
                        </div>
                        Ribbon Default <br />
                        <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                      <div class="col-sm-4">
                          <div class="position-relative p-3 bg-gray" style="height: 180px">
                            <div class="ribbon-wrapper">
                              <div class="ribbon bg-primary">
                                Ribbon
                              </div>
                            </div>
                            Ribbon Default <br />
                            <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                          </div>
                      </div>
                  </div>
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
@endsection