<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCTCE SPORT WEBSITE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="style1.css">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alike' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</style>
</head>
<body>
    <header class=" jmp-style text-center" style="margin-bottom:0">



        <!-- navbar -->
        
     <nav class="navbar navbar-expand-lg navbar-light bg-light py-1  shadow-sm p-3 mb-5 bg-white rounded">
       <div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong><span class="logoname">ESPORTAS</strong></span></a>
         <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
         <div id="navbarSupportedContent" class="collapse navbar-collapse">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item active"><a href="home.php" class="nav-link font-italic"> Home </a></li>
     
     
             <span class="dropdown">
               <button class="btn btn-secondary dropdown-toggle font-italic " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i> Features</i>
               </button>
               <li class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <a class="dropdown-item" href="eventschedule.php">Event Schedule</a>
                 <a class="dropdown-item" href="registration.html">Event Registration</a>
                 <a class="dropdown-item" href="#">Point table</a>
                 <a class="dropdown-item" href="#">Certificates</a>
               </li>
             </span>
     
     
     
     
     
     
             <li class="nav-item active"><a href="map.html" class="nav-link font-italic"> Map </a></li>
             <li class="nav-item active"><a href="about.html" class="nav-link font-italic"> About Us </a></li>
             <li class="nav-item active"><a href="#footer" class="nav-link font-italic"> Contact</a></li>
             <li>
               <p >
                 <a href="#" class="btn btn-info"   data-toggle="modal" data-target="#exampleModal">
                   <span class="logout"> Log out</span>
                 </a></p>
               </p> 
             </li>
           </ul>
         </div>
       </div>
     </nav>
     
     
     
     
     
       
     </header>
     
     
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Sign out</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
            Are you sure you want to sign out
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'">Sign out</button>
           </div>
         </div>
       </div>
     </div>


<div class="container mptxt"><h4><h1><B>It's</B></h1> impossible to map out a route to your destination if you don't<br>
    know where you're starting from<br>we are here to help you </h4></div>


<!--Google map-->
<div id="map-container" class="z-depth-1-half map-container " >
    <iframe src="https://view.genial.ly/5f9d43f3482d221011118537/interactive-image-interactive-image" scrolling ="no" frameborder="0"
      style="border:0" allowfullscreen class="mp" alt:"MAP IS LOADING"></iframe>
  </div>





     <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5" id="footer">

  
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fa fa-google-plus  white-text aria-hidden="true" "></i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fa fa-linkedin-square aria-hidden="true" mr-50"></i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold logoname">ESPORTAS</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Pratice more and spent less for <br> registration 
          .</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Services</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Bootstrap</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Javascript</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">XAMPP</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Your Account</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">About</a>
        </p>
        <p>
          <a class="dark-grey-text" href="">Sct</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fa fa-home" aria-hidden="true"></i> SCTCE, Pappanamcode, TVM</p>
        <p>
          <i class="fa fa-envelope-square" aria-hidden="true"></i> Esportas@gmail.com</p>
        <p>
          <i class="fa fa-mobile" aria-hidden="true"></i> +91 7902264475</p>
        <p>
          <i class="fa fa-print" aria-hidden="true"></i> 120304567</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
    <a class="dark-grey-text logoname" href="#"> ESportas</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->






</div>

</body>
</html>