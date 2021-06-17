<?php
session_start();
                            if (isset($_POST['register']))
                            {
                                // database connection code
                                $con = mysqli_connect('localhost', 'root', '','sports');



                                // get the post records
                                $name = $_POST['name'];
                                $branch = $_POST['branch'];
                                $sem = $_POST['sem'];
                                $email = $_POST['email'];
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                $ktu = $_POST['ktu'];
                                $type = $_POST['type'];
                                if (empty($name)|| empty($branch)||empty($sem)|| empty($email)||empty($username)|| empty($password)||empty($ktu)|| empty($type)){
                                    ;
                                }
                                else{

                                // database insert SQL code
                                $sql="INSERT INTO `student`( `name`, `branch`, `sem`, `email`, `username`, `password`, `ktuid`, `type`) VALUES ('$name','$branch','$sem','$email ','$username','$password','$ktu','$type')";



                                // insert in database 
                                $rs = mysqli_query($con, $sql);

                                if($rs)
                                {
                                    echo "Contact Records Inserted";
                                }
                                }
                            }
                                ?>



<!DOCTYPE html>
<html>
<head>
    <title>signup</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="sign.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<script Type="text/JavaScript" src="checksignup.js"></script>
<style>

.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #030303;
}




</style>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    
    
    <div class="container register">
                    <div class="row">
                        <div class="col-md-3 register-left">
                            <img   src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                            <h3>Welcome</h3>
                            <p>You are 30 seconds away from earning your own goodies!</p>
                            <input type="submit" name="" onclick="window.location.href='index.php'" value="Login"/><br/>
                        </div>


                        
                        <div class="col-md-9 register-right">
                           <form name="sign" method="post" action="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">Signup</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=" Name *" name="name"value="" />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="branch">
                                                    <option value="CSE" name="cse" selected>CSE</font></option>
                                                    <option value="ECA" name="ec_A">EC-A</option>
                                                    <option value="ECB" name="ec_b">EC-B</option>
                                                    <option value="MECH"name="mech">MECH</option>
                                                    <option value="PROD"name="prod">PRODUCTION</option>
                                                    <option value="AUTO"name="auto">AUTO</option>
                                                    <option value="BT"name="bt">BT</option>
                                                </select>
                                            </div>
                                            <div class="form-group" >
                                                <select class="form-control" name="sem">
                                                    <option value="1" selected>semester s1</font></option>
                                                    <option value="2">s2</option>
                                                    <option value="3">s3</option>
                                                    <option value="4">s4</option>
                                                    <option value="5">s5</option>
                                                    <option value="6">s6</option>
                                                    <option value="7">s7</option>
                                                    <option value="8">s7</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder=" username *"name="username" value="" />
                                            </div>
                                            <div class="form-group">
                                                <div class="maxl">
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="male" checked>
                                                        <span> Male </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="female">
                                                        <span>Female </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email *" name="email" value="" autocomplete=off/>
                                            </div>
                                            <div class="form-group">
                                                <input type="text"   class="form-control" placeholder="Ktu Id *" name="ktu" value="" />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="type">
                                                    <option name="participant" selected>Participant</font></option>
                                                    <option name="eventcoord">Event Coordinator</option>
                                                    <option name="deptrep">Department Representative</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="password *" name="password" value="" />
                                            </div>
                                            <input type="submit" class="btnRegister" name="register" onClick="emptysignup()"  value="Register"/>
                                        </div>
                                    </div>
                                </div>
                               
    
    
                                        
                                        
                                
                            
                            </div>
                           </form>

                          
                        </div>
                    </div>
    
     
     </div>   
     
     <footer class="bg-light pb-5">
        <div class="container text-center">
          <p class="font-italic text-muted mb-0">&copy; Copyrights <span class="logoname">ESPORTAS</span>.com All rights reserved.</p>
        </div>
      </footer>
</body>
    </html>