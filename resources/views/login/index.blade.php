
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>E-Health Care | LogIn</title>
  <!-- Favicon -->
  <link rel="icon" href="/abc/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/abc/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/abc/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('asset/css/argon.css?v=1.2.0')}}" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
           
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="/" class="nav-link">
              <span class="nav-link-inner--text">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/register" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">


    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            @if(session('msg'))
              <div class="alert alert-warning">
              {{session('msg')}}
              </div>
           @endif
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="/login/auth/facebook" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="{{ asset('asset/img/facebook.png')}}"></span>
                  <span class="btn-inner--text">Facebook</span>
                </a>
                <div class="text-muted text-center mt-2 mb-3"><small>Only For Patient</small></div>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or Login in with credentials</small>
              </div>
              <form role="form" method="POST">
              @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="username" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input type="password"  class="form-control" placeholder="Password" name="password">
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" name="submit">Log in</button><br>
                  <a href="/forgotpassword">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="/abc/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/abc/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/abc/vendor/js-cookie/js.cookie.js"></script>
  <script src="/abc/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="/abc/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="/abc/js/argon.js?v=1.2.0"></script>
</body>

</html>
