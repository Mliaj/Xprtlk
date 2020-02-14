<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <title>XPRTLK</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('bootstrap-landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('bootstrap-landing/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('bootstrap-landing/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('bootstrap-landing/css/landing-page.min.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="mb-n4 mt-n3 navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('landing') }}">
        <img src="{{ asset('bootstrap-landing/img/brand.png') }}" alt="" style="width:100px;heigth:30px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Speakers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Organizers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
          </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
          <a class="btn btn-success mr-sm-2" href="{{ route('login') }}">Login</a>
          <a class="btn btn-primary" href="{{ route('register') }}">Sign Up</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class=" overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Organize Events | Find expert speakers!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="get" action="{{ route('register') }}">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email..." required>
              </div>
              <div class="col-12 col-md-3">
                <button class="btn btn-lg btn-primary">Start Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-users m-auto text-primary"></i>
            </div>
            <h3>Find Good Experts</h3>
            <p class="lead mb-0">Lets you find the perfect speaker you want!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="far fa-clock m-auto text-primary"></i>
            </div>
            <h3>Saves Time</h3>
            <p class="lead mb-0">Lets you have an efficient way of making events as an organizer and applying events as an expert.</p>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="far fa-handshake m-auto text-primary"></i>
              </div>
              <h3>Connect with each other</h3>
              <p class="lead mb-0">Lets you communicate with each other fast and easy.</p>
            </div>
          </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
        <div class="card-body">
            <div class="container">
                <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Expert Speaker</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Event Organizer</a>
                    </li>
                  </ul>
            </div>

            {{-- First Tab Content --}}
            <div class="tab-content" id="custom-content-below-tabContent">
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Create your profile for free</h2>
                        <p class="lead mb-0">
                            Create your profile and event organizers will find you based on the information
                            you provide on your profile.
                        </p>
                    </div>
                 </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>No Commission</h2>
                        <p class="lead mb-0">
                            No commission fee charged when an event organizer contacts you.
                            Negotiate directly with event managers and keep everything -
                            Connect freely with no charge and you're good to go!
                        </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Apply to any events</h2>
                        <p class="lead mb-0">
                            You can browse any list of events and send a proposal of yourself.
                        </p>
                    </div>
                </div>
              </div>

              {{-- Second Tab Content --}}
              <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Find an expert</h2>
                        <p class="lead mb-0">
                            Looking for an expert with great presentation skills
                            and industry expertise.
                        </p>
                    </div>
                 </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Contact experts directly for free</h2>
                        <p class="lead mb-0">
                            Handle communication directly, with speakers you want to invite.
                        </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Create and post an event</h2>
                        <p class="lead mb-0">
                            You can browse any list of events and send a proposal of yourself.
                        </p>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </section>

  {{-- <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Featured Speakers</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="{{ asset('bootstrap-landing/img/testimonials-1.jpg') }}" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('bootstrap-landing/img/testimonials-2.jpg') }}" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('bootstrap-landing/img/testimonials-3.jpg') }}" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container  mt-5">
      <button type="button" class="btn btn-outline-info">Show more</button>
    </div>
  </section> --}}

  <!-- Call to Action -->
  {{-- <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
<script src="{{ asset('bootstrap-landing/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap-landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
