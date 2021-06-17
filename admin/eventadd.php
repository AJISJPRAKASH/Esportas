
                                <?php
                                session_start();
                                $id= 0;
                                $event_name='';
                                $event_time='';
                                $update=false;
                                global $con;
                            if (isset($_POST['submit']))
                            {
                                // database connection code
                                $con = mysqli_connect('localhost', 'root', '','sports');



                                // get the post records
                                $ename = $_POST['name'];
                                $eventtime = $_POST['etime'];
                               
                                if (empty($ename)|| empty($eventtime)){
                                    ;
                                }
                                else{

                                // database insert SQL code
                                $sql="INSERT INTO `event`( `event_name`, `event_time`) VALUES ('$ename','$eventtime')";



                                // insert in database 
                                $rs = mysqli_query($con, $sql);
                                $_SESSION['message']="Record has inserted";
                                $_SESSION['msg_type']="success";
                               
                                
                             
                               
                                }
                            }
                            if (isset($_GET['edit']))
                            {
                                $update=true;
                                $id=$_GET['edit'];
                              
                                $event_name=$id;
                                
                            }
                           
                            
                           
                        
                            ?>                       
<!DOCTYPE html>
<html>
<head>
    
    <title>signup</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js">
<link href="https://code.jquery.com/jquery-3.5.1.js">
<link href="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
<link href="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="sign.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<script Type="text/JavaScript" src="checksignup.js"></script>
<script Type="text/JavaScript" src="table.js"></script>

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
<header class=" jmp-style text-center" style="margin-bottom:0">



<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light py-1  shadow-sm p-3 mb-5 bg-white rounded">
<div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong><span class="logoname">ESPORTAS</strong></span></a>
 <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
 <div id="navbarSupportedContent" class="collapse navbar-collapse">
   <ul class="navbar-nav ml-auto">
     <li class="nav-item active"><a href="adminhome.php" class="nav-link font-italic"> Home </a></li>

     <li class="nav-item active"><a href="../home.php" class="nav-link font-italic"> Vist Site </a></li>
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

    <?php 
    if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
    </div>
    
    <?php endif ?>
    
    <div class="container register">                   
                        <div class="col-md-9 register-right">
                           <form name="sign" method="post" action="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3 class="register-heading">ADD EVENT</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo $event_name; ?>" placeholder="Event Name*" name="name"  />
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="time" class="form-control" value="<?php echo $event_time; ?>" placeholder=" Event Time*" name="etime" />
                                            </div>                                                                                                                                
                                        </div>
                                        <div class="col-md-6">
                                            <?php
                                             if ($update == true):
                                             ?>
                                             <input type="submit" class="btnRegister" onClick="emptysignup()" name="update" value="update"/>
                                            
                                            <?php else: ?>
                                            <input type="submit" class="btnRegister" onClick="emptysignup()" name="submit" value="Submit"/>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>                                                                                                                                                                              
                            </div>
                           </form>                          
                        </div>
                    </div>
                    <?php
                    $conn = mysqli_connect("localhost", "root","", "sports");
                    $sql="SELECT * FROM event";
                    $result= mysqli_query($conn,$sql);
                    ?>
     
     <div class="container py-5">
    <header class="text-center ">
    <h1 class="display-4"> Event Table</h1>
    
   
  </header>
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
           
            <thead>
            <tr>
            <th>Event</th>
            <th>Event time</th>
            <th colspan="2"> Action</th>

            </tr>
            </thead>
            <tbody>

        <?php
          while( $row = mysqli_fetch_assoc( $result ) ) : ?>
           
            <tr>
            <td><?php echo $row['event_name']; ?></td>
            <td><?php echo $row['event_time']; ?></td>
              <td>
              <a href="eventadd.php?edit=<?php echo $row['event_name']; ?>" class="btn btn-info">Edit</a>
              

              <a href="eventadd.php?delete=<?php echo $row['event_name']; ?>" class="btn btn-danger">Delete</a>
              <?php
                    $cn = mysqli_connect("localhost", "root","", "sports");
                    if (isset($_GET['delete']))
                    {
                     
                        $id=$_GET['delete'];
                        $sql="DELETE FROM event WHERE event_name='$id'";
                        $rs = mysqli_query($cn, $sql);
                        $_SESSION['message']="Record has deleted";
                        $_SESSION['msg_type']="danger"; 
                      
                    } 
                    if (isset($_POST['update']))
                    {
                     
                        
                        $ename = $_POST['name'];
                        $eventtime = $_POST['etime'];
                        $sql="UPDATE event SET  event_name='$ename',event_time=' $eventtime ' WHERE event_name='$ename '";
                        $rs = mysqli_query($cn, $sql);
                        $_SESSION['message']="Record has updated";
                        $_SESSION['msg_type']="success"; 
                      
                    } 
                    ?>
                   <?php mysqli_close($cn); ?>
              </td>
            </tr>
          <?php endwhile; ?>
    
        
       </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
     <?php mysqli_close($conn); ?>
    
     
     </div>   
     <footer class="bg-light pb-5">
        <div class="container text-center">
          <p class="font-italic text-muted mb-0">&copy; Copyrights <span class="logoname">ESPORTAS</span>.com All rights reserved.</p>
        </div>
      </footer>
</body>
    </html>
