<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>E-Health Care | Registration</title>

  <script src="{{ asset('asset/js/jquery-3.5.1.min.js')}}"></script>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('asset/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('asset/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ asset('asset/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('asset/css/argon.css?v=1.2.0" type="text/css')}}">
  <link rel="stylesheet" href="{{ asset('asset/css/register.css" type="text/css')}}">
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
         
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 reg">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            
            <div class="card-body px-lg-5 py-lg-5">
              
              <% if(typeof alert != 'undefined'){ %>
                <% alert.forEach(function(error){ %>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <%= error.msg %>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                  <% })%> 
                  <% }%> 
                 
              <form  method="POST" enctype="multipart/form-data">
                @csrf
              
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" name="name" placeholder="Name" type="text">
                </div>
                
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        
                        <input class="form-control" id="username" name="username" placeholder="User Name" type="text" onkeyup="checkusernameAvailability()">
                        <span id="user-name-availability-status" style="    font-size: 15px;
                        padding-top: 14px;
                        padding-right: 5px;
                        color: #8376ca;">
                        </span> 
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" id="email1" name="email" placeholder="Email" type="email" onkeyup="checkemailAvailability()">
                    <span id="user-email-availability-status" style="    font-size: 15px;
                    padding-top: 14px;
                    padding-right: 5px;
                    color: #8376ca;"></span> 
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" name="password" placeholder="Password" type="password">
                  </div>
                  
                </div>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-address-book"></i></span>
                    </div>
                    <input class="form-control" name="contactno" placeholder="Contact No" type="text">
                  </div>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                   
                        <input class="form-control" name="dob"  placeholder="Date of Birth"  type="date" name="date" id="datepicker">
                  </div>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                    </div>
                    <input class="form-control" name="address" placeholder="Address" type="text">
                  </div>

                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="	far fa-heart"></i></span>
                    </div>
                    <input class="form-control" name="bloodgroup" placeholder="Blood Group" type="text">
                  </div>

                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-plus-square"></i></span>
                    </div>
                    <input class="form-control" name="bmi" placeholder="BMI" type="text">
                  </div>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-weight"></i></span>
                    </div>
                    <input class="form-control" name="weight" placeholder="Weight" type="text">
                  </div>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-plus-square"></i></span>
                    </div>
                    <input class="form-control" name="bloodpressure" placeholder="Blood Presure" type="text">
                  </div>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-plus-square"></i></span>
                    </div>
                    <input class="form-control" name="cal" placeholder="Calorie Intake" type="text">
                  </div>

                  <label for="">Choose a Profile Picture</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-user"></i></span>
                    </div>
                    <input class="form-control" name="myimg" type="file">
                  </div>
                  <input class="form-control" name="type" value="patient" type="hidden">
                  <input class="form-control" name="created_at" value="{{date('Y-m-d H:i:s')}}" type="hidden">

                <div class="text-center">
                  <button type="submit" name="submit" id="account"  class="btn btn-primary mt-4">Create account</button>
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
  
 <!-- <script src="/abc/plugins/jquery.js"></script>
 <script src="/abc/plugins/bootstrap.min.js"></script>
  
  <script src="/abc/vendor/jquery/dist/jquery.min.js"></script>
 
  <script src="/abc/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <script src="/abc/vendor/js-cookie/js.cookie.js"></script>

  <script src="/abc/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>

   <script src="/abc/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
   <script src="/abc/js/argon.js?v=1.2.0"></script>
 -->

 <script src="/abc/js/jquery-3.5.1.min.js"></script>
 <script src="/abc/plugins/jquery.js"></script>
<!-- <script src="/abc/plugins/bootstrap.min.js"></script>
 --><script src="/abc/plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="/abc/plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="/abc/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->

<script src="/abc/plugins/validate.js"></script>
<script src="/abc/plugins/wow.js"></script>
<script src="/abc/plugins/jquery-ui.js"></script>
<script src="/abc/plugins/timePicker.js"></script>
<script src="/abc/js/script.js"></script>

  <script>
    $(function () {
    $('#datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        showButtonPanel: true,
        changeMonth: true,
        changeYear: true,
        maxDate:new Date()  ,
        minDate:'-30Y',
        inline: true
    });
});
</script>
<script>
var email='';
var username='';


  function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
  url: "/register/check_email",
  data:'email='+$("#email1").val(),
  type: "POST",
success:function(data){
console.log("checkemailAvailability -> data", data.results)
if(data.results == true){
   email = 'Already Registerd';
   if(email == 'Already Registerd' || username == 'Already Registerd'){
  $("#account").hide();

}
else if(email == 'Available' && username == 'Available'){
  $("#account").show();

}
  //$("#account").hide();
}
else{
   email = 'Available';
   if(email == 'Already Registerd' || username == 'Already Registerd'){
  $("#account").hide();

}
else if(email == 'Available' && username == 'Available'){
  $("#account").show();

}
   //$("#account").show();

}
$("#user-email-availability-status").html(email);
$("#loaderIcon").hide();
},
error:function (){}
});
}




  function checkusernameAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
  url: "/register/check_username",
  data:'username='+$("#username").val(),
  type: "POST",
success:function(data){
if(data.results == true){
   username = 'Already Registerd';
   if(email == 'Already Registerd' || username == 'Already Registerd'){
  $("#account").hide();

}
else if(email == 'Available' && username == 'Available'){
  $("#account").show();

}
   //$("#account").hide();

}
else{
   username = 'Available';
   if(email == 'Already Registerd' || username == 'Already Registerd'){
  $("#account").hide();

}
else if(email == 'Available' && username == 'Available'){
  $("#account").show();

}
   //$("#account").show();

}
$("#user-name-availability-status").html(username);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</body>

</html>