@extends('dashboard/account')

@section('content-title')
    Profile
@endsection

@section('breadcrumb')
  @include('inc.home_links')
  <li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                    src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Bep Stefano</h3>

                <p class="text-muted text-center mb-2">Software Engineer</p>

                <p class="text-primary text-center">Facebook</p>
                <hr>
                <strong><i class="fas fa-info-circle mr-1"></i>Bio</strong>

                <p class="text-muted">
                  I am a professional expert.
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#aboutme" data-toggle="tab">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#achievements" data-toggle="tab">Achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#presentations" data-toggle="tab">Presentations</a></li>
                        <li class="nav-item"><a class="nav-link" href="#ratings" data-toggle="tab">Ratings & Feedbacks</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="aboutme">
                                <!-- Post -->
                                <div class="post">
                                    <div class="card card-primary">
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                        <strong>Fields</strong>

                                        <p class="text-muted">
                                            B.S. in Computer Science from the University of Tennessee at Knoxville
                                        </p>

                                        <hr>

                                        <strong>Expertise</strong>

                                        <p class="text-muted">Technolgy, Business, Leadership</p>

                                        <hr>

                                        <strong>Location</strong>

                                        <p class="text-muted">Cebu City</p>

                                        <hr>

                                        <strong>Language</strong>

                                        <p class="text-muted">English</p>

                                        <hr>

                                        <strong>Birthdate</strong>

                                        <p class="text-muted">{{\Carbon\Carbon::now()->format('F d, Y')}}</p>

                                        <hr>

                                        <strong>Contact No.</strong>

                                        <p class="text-muted">09234322671</p>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="achievements">
                                <!-- The timeline -->
                                <div class="timeline timeline-inverse">
                                    <div class="post">
                                        <div class="card card-primary">
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                            <strong>Graduated</strong>

                                            <p class="text-muted">
                                                B.S. in Computer Science from the University of Tennessee at Knoxville
                                            </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="card card-primary">
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                            <strong>Graduated</strong>

                                            <p class="text-muted">
                                                B.S. in Computer Science from the University of Tennessee at Knoxville
                                            </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="card card-primary">
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                            <strong>Graduated</strong>

                                            <p class="text-muted">
                                                B.S. in Computer Science from the University of Tennessee at Knoxville
                                            </p>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="presentations">
                                <section class="content">

                                    <!-- Default box -->
                                    <div class="card">
                                      <div class="card-body p-0">
                                        <table class="table table-striped projects">
                                            <thead>
                                                <tr>
                                                    <th style="width: 30%">
                                                        Event Name
                                                    </th>
                                                    <th style="width: 30%">
                                                        Presentation Type
                                                    </th>

                                                    <th style="width: 40%" >
                                                        Role
                                                    </th>

                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a class="text-info">
                                                           IoT Conference
                                                        </a>
                                                        <br/>
                                                        <small>
                                                            {{ \Carbon\Carbon::now()->format('M. d, Y')}}
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <a class="">
                                                            Conference
                                                         </a>
                                                    </td>

                                                    <td>
                                                        <a class=""> Conference Speaker</a>
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <a class="text-info">
                                                            Cryptocurrency
                                                        </a>
                                                        <br/>
                                                        <small>
                                                            {{ \Carbon\Carbon::now()->format('M. d, Y')}}
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <a class="">
                                                            Moderator
                                                         </a>

                                                    </td>

                                                    <td>
                                                        <a class="">Moderator</a>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                      </div>
                                      <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                  </section>
                                  <!-- /.content -->
                            </div>
                            <!-- /.tab-pane -->
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="ratings">
                                <!-- The timeline -->
                                <div class="post">
                                    <div class="card card-primary">
                                        <!-- /.card-header -->
                                        <div class="card-body">

                                            <span class="heading">User Rating</span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <p>4.1 average based on 254 reviews.</p>
                                            <hr style="border:3px solid #f1f1f1">

                                            <div class="row">
                                                <div class="side">
                                                    <div>5 star</div>
                                                </div>
                                                <div class="middle">
                                                    <div class="bar-container">
                                                    <div class="bar-5"></div>
                                                    </div>
                                                </div>
                                                <div class="side right">
                                                    <div>150</div>
                                                </div>
                                                <div class="side">
                                                    <div>4 star</div>
                                                </div>
                                                <div class="middle">
                                                    <div class="bar-container">
                                                    <div class="bar-4"></div>
                                                    </div>
                                                </div>
                                                <div class="side right">
                                                    <div>63</div>
                                                </div>
                                                <div class="side">
                                                    <div>3 star</div>
                                                </div>
                                                <div class="middle">
                                                    <div class="bar-container">
                                                    <div class="bar-3"></div>
                                                    </div>
                                                </div>
                                                <div class="side right">
                                                    <div>15</div>
                                                </div>
                                                <div class="side">
                                                    <div>2 star</div>
                                                </div>
                                                <div class="middle">
                                                    <div class="bar-container">
                                                    <div class="bar-2"></div>
                                                    </div>
                                                </div>
                                                <div class="side right">
                                                    <div>6</div>
                                                </div>
                                                <div class="side">
                                                    <div>1 star</div>
                                                </div>
                                                <div class="middle">
                                                    <div class="bar-container">
                                                    <div class="bar-1"></div>
                                                    </div>
                                                </div>
                                                <div class="side right">
                                                    <div>20</div>
                                                </div>
                                            </div>

                                            <hr>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
