
   <?php
                                session_start();
                                $chessno ='';
                                $eventname = '';
                            if (isset($_POST['submit']))
                            {
                               
                                $chessno = $_POST['chsno'];
                                $eventname = $_POST['enme'];
                            }


?>








<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCTCE SPORT WEBSITE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script Type="text/JavaScript" src="table.js"></script>
 <link rel="stylesheet" type="text/css" href="style1.css">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alike' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <style>

.register{
    background: -webkit-linear-gradient(left, #3931af, #3931af);
    margin-top: 1%;
    padding: 1%,1%,1%,1%;
}

.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
    border-top-right-radius: 10% 50%;
    border-bottom-right-radius: 10% 50%;
}

.register .register-form{
    padding: 5%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 1%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}


.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #030303;
}
 



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
                 <a class="dropdown-item" href="registration.php">Event Registration</a>
                 <a class="dropdown-item" href="#">Point table</a>
                 <a class="dropdown-item" href="#">Certificates</a>
               </li>
             </span>
     
     
     
     
     
     
             <li class="nav-item active"><a href="map.php" class="nav-link font-italic"> Map </a></li>
             <li class="nav-item active"><a href="about.php" class="nav-link font-italic"> About Us </a></li>
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
     

    
     <div class="container register">                   
                        <div class="col-md-12 register-right">
                           <form name="sign" method="post" action="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control"  placeholder="Chessno..*" name="chsno"  />
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control"  placeholder=" EventName*" name="enme" />
                                            </div>                                                                                                                                
                                        </div>
                                        <div class="col-md-6">
                                          
                                             
                                            
                                          
                                            <input type="submit" class="btnRegister" onClick="emptysignup()" name="submit" value="Submit"/>
                                            
                                        </div>
                                    </div>
                                </div>                                                                                                                                                                              
                            </div>
                           </form>                          
                        </div>
                    </div>

                    <CENTER><h6 class="heading">Insert Chessno and Eventname to get certificate</h6></CENTER>


     <?php
                    $conn = mysqli_connect("localhost", "root","", "dbtuts");
                    $sql="SELECT * FROM  tbl_uploads where 	chessno='$chessno' and 	event_name='$eventname'";
                    $result= mysqli_query($conn,$sql);
                    ?>
       <div class="container py-5">
    
    <CENTER><h1 class="display-4 "> Certificate</h1></CENTER>
    
   
  
              <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                  <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                      <div class="table-responsive">
                        <table id="example" style="width:100%" class="table table-striped table-bordered">
           
            <thead>
            <tr>
            <th>File</th>
            <th>Type</th>
            <th>Chessno</th>
            <th>Eventname</th>
            <th>View</th>

            </tr>
            </thead>
            <tbody>

        <?php
          while( $row = mysqli_fetch_assoc( $result ) ) : ?>
           
            <tr>
            <td><?php echo $row['file'] ?></td>
            <td><?php echo $row['type'] ?></td>
            <td><?php echo $row['chessno'] ?></td>
            <td><?php echo $row['event_name'] ?></td>
            <td><a href="admin/uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
              
             
                  
        
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