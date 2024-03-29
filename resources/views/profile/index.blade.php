<!DOCTYPE html>
<html>
<title>E-Health Care</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/profile.css')}}">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<!--  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body class="w3-light-grey">
    <div class="top-menu">
        <button type="button" class="btn btn-info menu" id="" ><a href="{{route('home.index')}}"><i class="fa fa-angle-left" style="font-size:18px"></i></a></button>
        <button type="button" class="btn btn-info menu" id="profile">Profile</button>
        <button type="button" class="btn btn-info menu" id="appointment">Appointment</button>
        <button type="button" class="btn btn-info menu" id="payment">Payment</button>
        <button type="button" class="btn btn-info menu" id="consultant">Consultant</button>
        <button type="button" class="btn btn-info menu" id="prescription">Prescription</button>
    </div>
    

<!-- Page Container -->
<div class="w3-content w3-margin-top profile" id="profile" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="{{asset('asset/upload/nayeem.jpg')}}" style="width:100%; height: 30%;" alt="Avatar">
                  <button class="btn btn-info" style="margin-left: 380px;
                  margin-top: 10px;"><a href="/user/edit_info/<%= p_info.id%>">Edit</a></button>

        </div>
        <div class="w3-container" style="margin-top: 30px;">
          
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$patient->name}}</p>
          <p><i class="far fa-calendar-alt fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$patient->dob}}</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$patient->address}}</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$patient->email}}</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{$patient->contactno}}</p>
          <hr>

          
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
       <div class="nn">
       	 <h2 class="w3-text-grey w3-padding-16"><i class="fas fa-heartbeat fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Health Status</h2>
       </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Blood Group : {{$patient->bloodgroup}}</b></h5>
          <hr>
        </div>
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b>BMI : {{$patient->bmi}}</b></h5>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Weight : {{$patient->weight}}Kg</b></h5>          
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Blood Presure : {{$patient->bloodpressure}}</b></h5>          
        </div>
          <hr>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Calorie intake : {{$patient->cal}} calories</b></h5>          
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <div class="nn">
            <h2 class="w3-text-grey w3-padding-16"><i class="fas fa-procedures fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Test Report</h2> 
            
            <div class="but2">
                <button class="btn btn-info"><a href="/user/add_test_report/<%= test_report[0].user_id%>">Add</a></button>

            </div> 
        </div>
        <% test_report.forEach( function(std){ %>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Name : <%= std.name%></b></h5>          
        </div>
        <div class="w3-container" style="margin-bottom: 30px;">
          <img src="/abc/upload/<%= std.tr_photo%>" style="width: 200px;height: 200px;">     
        </div>
            <%})%>         
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<div class="appointment">
  <div class="container">
    <h2>Appointment Details</h2>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>consultant Name</th>
          <th>Department Name</th>
          <th>Date</th>
          <th>Status</th>
          <th>Chat</th>
          <th>Payment</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>dd</td>
          <td>d</td>
          <td>d</td>
          <td><span class="badge badge-warning">pending</span></td>
          <td><span class="badge badge-warning">Not avialable</span></td>
          <td><a href="" ><span  class="payment">Pay Now</span></a></td>
        </tr>
       
      </tbody>
    </table>
  </div>
</div>
<div class="payment">
  <div class="">
    <button type="button" class="btn btn-info menu2" id="c_payment">Consultant Payment</button>
    <button type="button" class="btn btn-info menu2" id="m_payment">Medecine Payment</button>
    <button type="button" class="btn btn-info menu2" id="d_payment">Diagnostics Payment</button>
  </div>
</div>
<div class="consultant">
  <div class="container">
    <h2>consultant History</h2>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>Department Name</th>
          <th>Date</th>
          <th>Time</th>
          <th>Payment Status</th>
          <th>Pay Now</th>
        </tr>
      </thead>
      <tbody>
        <% consult_info.forEach( function(std){ %>

        <tr>
          <td><%= std.department %></td>
          <td><%= std.date %></td>
          <td><%= std.time %></td>
          <td><%= std.payment_status %></td>
        
       
          <td><a href="/user/payment/<%= std.p_id %>/<%= std.d_id %>" style="color: blue !important;font-size: 14px;">Pay</a></td>
        </tr>
        <%})%>
      </tbody>
    </table>
  </div>
</div>
<div class="prescription" id="HTMLtoPDF_prescription">
  <div class="container">

    <div class="card-group">
      <div class="card bg-info">
        <div class="card-body text-center">
          <table class="table table-borderless">
      <thead>
        <tr>
          <th>Consultant Name :</th>
          <th>Nayeem</th>
        </tr>
        <tr>
          <th>Date :</th>
          <th>11-11-20</th>
        </tr>
      </thead>
      <tbody>   
      </tbody>
    </table>
           <table class="table table-borderless">
      <thead>
        <tr>
          <th>Medicine Name</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Napa</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Napa</td>
          <td>10</td>
        </tr>
        <tr>
          <td><a href="#" onclick="HTMLtoPDF_prescription()"  style = "color: blue !important;font-size: 14px;">Download PDF</a></td>
        </tr>
      </tbody>
    </table>
        </div>
      </div>
      </div>  
    </div></div>
<div class="c_payment">
  <div class="container" id="HTMLtoPDF_patient">
    <h2>Consultant Payment History</h2>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>Paid Amount</th>
          <th>Payment Gateway</th>
          <th>Date</th>
          <th>Payment Status</th>
        </tr>
      </thead>
      <tbody>
        <% payment_info.forEach( function(std){ %>

        <tr>
          <td><%= std.amount %></td>
          <td><%= std.gateway %></td>
          <td><%= std.payment_date %></td>
          <td><span class="badge badge-success"><%= std.payment_status %></span></td>
          <%})%>
        </tr>
        
      </tbody>
    </table>
  </div><!--  -->
  <div class="">
    <button class="btn btn-success" style="margin-left: 650px;margin-top: 50px;">
      <a href="#" onclick="HTMLtoPDF_patient()"  
        style = "color: white !important;font-size: 14px;text-decoration: none;">
        Download Payment History
      </a>
    </button>
  </div>
  </div>
      

<div class="m_payment">
  <div class="container">
    <h2>Medecine Payment History</h2>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>Medecine Name</th>
          <th>Paid Amount</th>
          <th>Payment Gateway</th>
          <th>Date</th>
          <th>Payment Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>100</td>
          <td>bkash</td>
          <td>11-11-20</td>
          <td><span class="badge badge-success">Success</span></td>
        </tr>
       
      </tbody>
    </table>
  </div>
</div>
<div class="d_payment">
  <div class="container">
    <h2>Diagnostics Payment History</h2>
    <table class="table table-borderless">
      <thead>
        <tr>
          <th>Diagnostics Name</th>
          <th>Paid Amount</th>
          <th>Payment Gateway</th>
          <th>Date</th>
          <th>Payment Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>John</td>
          <td>100</td>
          <td>bkash</td>
          <td>11-11-20</td>
          <td><span class="badge badge-success">Success</span></td>
        </tr>
       
      </tbody>
    </table>
  </div>
</div>
<script src="{{asset('asset/js/profile.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script>
<script>
  function goBack() {
    window.history.back();
  }
  </script>

<script src="{{asset('asset/js/jspdf.js')}}"></script>
<script src="{{asset('asset/js/jquery-2.1.3.js')}}"></script>
<script src="{{asset('asset/js/pdfFromHTML.js')}}"></script>
</body>
</html>
