

                                <?php
                                session_start();
                                $id= 0;
                                $event_name='';
                                $event_time='';
                                $update=false;
                                global $con;
                          
                            if (isset($_GET['edit']))
                            {
                                $update=true;
                                $id=$_GET['edit'];
                              
                                $event_name=$id;
                                
                            }
                           
                            
                           
                        
                            ?>       

















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
             <li class="nav-item active"><a href="adminhome.php" class="nav-link font-italic"> Home </a></li>
     
     
     
     
     
     
     
             <li class="nav-item active"><a href="map.php" class="nav-link font-italic"> Vist site </a></li>
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
     



     <?php
                    $conn = mysqli_connect("localhost", "root","", "sports");
                    $sql="SELECT * FROM student";
                    $result= mysqli_query($conn,$sql);
                    ?>
       <div class="container py-5">
    
    <CENTER><h1 class="display-4 "> USER Table</h1></CENTER>
    
   
  
              <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                  <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                      <div class="table-responsive">
                        <table id="example" style="width:100%" class="table table-striped table-bordered">
           
            <thead>
            <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Branch</th>
            <th>Sem</th>
            <th>email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Ktuid</th>
            <th>Type</th>
            <th>Delete</th>



            </tr>
            </thead>
            <tbody>

        <?php
          while( $row = mysqli_fetch_assoc( $result ) ) : ?>
           
            <tr>
            <td><?php echo $row['SI']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['sem']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['ktuid']; ?></td>
            <td><?php echo $row['type']; ?></td>
            

           
              <td>
              <a href="userdetail.php?delete=<?php echo $row['SI']; ?>" class="btn btn-danger">Delete</a>
              <?php
                    $cn = mysqli_connect("localhost", "root","", "sports");
                    if (isset($_GET['delete']))
                    {
                     
                        $id=$_GET['delete'];
                        $sql="DELETE FROM student WHERE SI='$id'";
                        $rs = mysqli_query($cn, $sql);
                        $_SESSION['message']="Record has deleted";
                        $_SESSION['msg_type']="danger"; 
                      
                    } 
                    if (isset($_POST['update']))
                    {
                     
                        
                        $ename = $_POST['name'];
                        $eventtime = $_POST['etime'];
                       // $sql="UPDATE event SET  event_name='$ename',event_time=' $eventtime ' WHERE event_name='$ename '";
                        $rs = mysqli_query($cn, $sql);
                        $_SESSION['message']="Record has updated";
                        $_SESSION['msg_type']="success"; 
                      
                    } 
                    ?>
                   <?php mysqli_close($cn); ?>
              
                   <td>
             
                  
        
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