
<?php

session_start();
  
  if (isset($_POST['login']))
  {
   
    $uname=$_POST['uname'];
    $pswd=$_POST['pswd'];
   
    if (empty($uname)|| empty($pswd))
    {
      echo"please fill the form";
      header('location:index.php');
    }
    else
    {
      $conn=mysqli_connect('localhost','root');
      $db=mysqli_select_db($conn,'sports');

      if(!$conn)
      {
        die('connection fails'.mysqli_connect_error());
      }
      $sql="SELECT username,password FROM eventcordinator WHERE username='$uname' AND password='$pswd'";
      $result= mysqli_query($conn,$sql);
      $num= mysqli_num_rows($result);
      if($num==1)
      {
        echo"data entered";
        $_SESSION['uname']=$name;
        $_SESSION['pswd']=$pswd;
        header('location:eventhome.php');
      }
      else{
        
        echo "<script >alert('Enter valid username and password');</script>";
        
       
          }
    }
  }
  
  ?>













<!DOCTYPE html>
<html>
    
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script Type="text/JavaScript" src="checkboxes.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

  <style>
    #choose {
        border-radius: 5px;
    }
    html {
    margin: 0;
    padding: 0;
    height: 100%;
   
}
.user_card {
    height: 400px;
    width: 350px;
    margin-top: auto;
    margin-bottom: auto;
    background: #f39c12;
    position: relative;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 5px;

}
.brand_logo_container {
    position: absolute;
    height: 170px;
    width: 170px;
    top: -75px;
    border-radius: 50%;
    background: #60a3bc;
    padding: 10px;
    text-align: center;
}
.brand_logo {
    height: 150px;
    width: 150px;
    border-radius: 50%;
   
}
.form_container {
    margin-top: 100px;
}
.login_btn {
    width: 100%;
    background: #c0392b !important;
    color: white !important;
}
.login_btn:focus {
    box-shadow: none !important;
    outline: 0px !important;
}
.login_container {
    padding: 0 2rem;
}
.input-group-text {
    background: #c0392b !important;
    color: white !important;
    border: 0 !important;
    border-radius: 0.25rem 0 0 0.25rem !important;
}
.input_user,
.input_pass:focus {
    box-shadow: none !important;
    outline: 0px !important;
}
.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
    background-color: #c0392b !important;
}
.ft{
    border:2px;
}
.bd{
    margin: 0;
    padding: 0;
    background: #bfc0c0;
    height: 100%;
}
</style>

</head>

<body>
  <div class="bd">
  <header class=" jmp-style text-center" style="margin-bottom:0">

    <!-- navbar -->
       
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-1  shadow-sm p-3 mb-5 bg-white rounded">
      <div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong><span class="logoname">ESPORTAS</strong></span></a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#" class="nav-link font-italic" data-toggle="modal" data-target ="#exampleModal"> Home </a></li>
           <li class="nav-item active"><a href="#" class="nav-link font-italic" data-toggle="modal" data-target ="#exampleModal"> About Us </a></li>
            <li class="nav-item active"><a href="#footer" class="nav-link font-italic"> Contact</a></li>
            <li>
              <p >
                <a href="#" class="btn btn-info"   data-toggle="modal" data-target="#exampleModal">
                  <span class="logout"> Log in</span>
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
            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          Please login or signup the page for acess the previleage
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='login.html'">Sign up</button>
          </div>
        </div>
      </div>
    </div>


	<div class="container h-100 ">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../login.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form name="log" action="" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text"  class="form-control  "  name="uname" placeholder="username" autocomplete="off">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password"  class="form-control"  name="pswd" placeholder="password" autocomplete="off">
            </div>
           
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
                


              
				 	<button type="submit"  class="btn login_btn" onClick="emptyornot()" name="login">Login</button>
				   </div>
          </form>
         
        </div>
        
    
		
				
				</div>
			</div>
		</div>
  </div>
</div>
  <!-- Footer -->
<footer class="page-footer  font-small blue-grey lighten-5" id="footer">

  
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
<div class="container text-center text-md-left mt-5 ft ">

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


</body>
</html>