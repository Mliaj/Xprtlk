@extends('dashboard/account')

@section('content-title')
    Event History
@endsection

@section('breadcrumb')
    @include('inc.home_links')
    <li class="breadcrumb-item active">Event History</li>
@endsection

@section('content')
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">

      <!-- Timelime example  -->
      <div class="row">
            <div class="col-md-12">
            <!-- The time line -->
                <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-green">{{ \Carbon\Carbon::now()->format('M. d, Y')}}</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">IOT CONFERENCE: THE INTERSECTION OF INDUSTRIES AND IOT TECHNOLOGIES</a> <span>|</span> Cebu City</h3>

                            <div class="timeline-body">
                                The global conference and exhibition where strategists,
                                technologists and implementers connect, putting IoT, AI, 5G,
                                Edge and Security into action across industry verticals.
                            </div>
                            <div class="timeline-footer">
                                Event Duration:<span class="time"> 2-3 Hrs. <i class="fas fa-clock"> </i></span>
                            </div>
                        </div>
                    </div>

                    <div class="timeline">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">{{ \Carbon\Carbon::now()->format('M. d, Y')}}</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas bg-blue"></i>
                            <div class="timeline-item">

                                <h3 class="timeline-header"><a href="#">IOT CONFERENCE: THE INTERSECTION OF INDUSTRIES AND IOT TECHNOLOGIES</a> <span>|</span> Cebu City</h3>

                                <div class="timeline-body">
                                    The global conference and exhibition where strategists,
                                    technologists and implementers connect, putting IoT, AI, 5G,
                                    Edge and Security into action across industry verticals.
                                </div>
                                <div class="timeline-footer">
                                    Event Duration:<span class="time"> 2-3 Hrs. <i class="fas fa-clock"> </i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.timeline -->

                    <div class="timeline">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">{{ \Carbon\Carbon::now()->format('M. d, Y')}}</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas bg-blue"></i>
                            <div class="timeline-item">

                                <h3 class="timeline-header"><a href="#">IOT CONFERENCE: THE INTERSECTION OF INDUSTRIES AND IOT TECHNOLOGIES</a> <span>|</span> Cebu City</h3>

                                <div class="timeline-body">
                                    The global conference and exhibition where strategists,
                                    technologists and implementers connect, putting IoT, AI, 5G,
                                    Edge and Security into action across industry verticals.
                                </div>
                                <div class="timeline-footer">
                                    Event Duration:<span class="time"> 2-3 Hrs. <i class="fas fa-clock"> </i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.timeline -->

                    <div class="timeline">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">{{ \Carbon\Carbon::now()->format('M. d, Y')}}</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas bg-blue"></i>
                            <div class="timeline-item">

                                <h3 class="timeline-header"><a href="#">IOT CONFERENCE: THE INTERSECTION OF INDUSTRIES AND IOT TECHNOLOGIES</a> <span>|</span> Cebu City</h3>

                                <div class="timeline-body">
                                    The global conference and exhibition where strategists,
                                    technologists and implementers connect, putting IoT, AI, 5G,
                                    Edge and Security into action across industry verticals.
                                </div>
                                <div class="timeline-footer">
                                    Event Duration:<span class="time"> 2-3 Hrs. <i class="fas fa-clock"> </i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.timeline -->

                    <div>
                        <i class="fas fa-clock bg-gray"></i>
                    </div>
                </div>
                <!--/.timeline -->
            </div>
            <!-- /.col -->
      </div>
      <!--/.row-->
    </div>
    <!-- /.timeline -->

  </section>
@endsection
