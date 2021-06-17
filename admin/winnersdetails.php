<?php
                                session_start();
                                $id= 0;
                                $update=false;
                                $chessno='';
                                $evname='';
                                $pos='';
                                $pts='';
                            if (isset($_GET['edit']))
                            {
                                $con= mysqli_connect("localhost", "root","", "sports");
                                $update=true;
                                $id=$_GET['edit'];
                                $pst=mysqli_query($con,"SELECT pos FROM wnrs  WHERE SI='$id'");
                                $r = mysqli_fetch_array($pst);
                                $pt=$r['pos'];
                               
                                switch ($pt) {
                                    case "one":
                                      $pts=10;
                                      break;
                                    case "two":
                                      $pts=5;
                                      break;
                                    case "three":
                                     $pts=3;
                                      break;
                                    default:
                                      echo "Error!";
                                    }
                                   
                            }
                            if (isset($_POST['update']))
                            {
                             
                                
                                $chessno= $_POST['chessno'];
                                $evname = $_POST['evname'];
                                $pos= $_POST['pos'];
                                
                                $brn = mysqli_query($con,"SELECT branch FROM $evname  WHERE chessno ='$chessno'");
                                $result = mysqli_fetch_array($brn);
                                $b=$result['branch'];
                                echo $b;
                                switch ($pos) {
                                    case "one":
                                      $p=10;
                                      break;
                                    case "two":
                                      $p=5;
                                      break;
                                    case "three":
                                     $p=3;
                                      break;
                                    default:
                                      echo "Error!";
                                    }
                                    $d=$p-$pts;
                                    echo $d;
                                $upd="UPDATE point_table SET `branch`='$b',`point`=(point+$d) WHERE branch='$b'";
                                $rst = mysqli_query($con, $upd);
                                $sql="UPDATE wnrs SET  chessno='$chessno',evname='$evname',pos='$pos' WHERE SI='$id'";
                                $rs = mysqli_query($con, $sql);
                                $_SESSION['message']="Record has updated";
                                $_SESSION['msg_type']="success"; 
                              
                            } 
                           
                            
                            echo $pts;
                        
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
                                             if ($update== true):
                                             ?>
                                            
                                            <form  method="post" action="">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo $chessno; ?>" placeholder="Chessno*" name="chessno"  />
                                            </div>
                                            <div class="form-group">
                                            <select class="form-control selectpicker"  name="evname" >
                                                                <option value="" disabled selected>Choose Eventname</option>
                                                                <option value="100m_b">100m(B)</option>
                                                                <option value="100m_g">100m(G)</option>
                                                                <option value="200m_b">200m(B)</option>
                                                                <option value="200m_g">200m(G)</option>
                                                                <option value="400m_b">400m(B)</option>
                                                                <option value="400m_g">400m(G)</option>
                                                                <option value="800m_b">800m(B)</option>
                                                                <option value="800m_g">800m(G)</option>
                                                                <option value="1500m_b">1500m(B)</option>
                                                                <option value="1500_g">1500m(G)</option>
                                                                <option value="3000m_b">3000m(B)</option>
                                                                <option value="3000m_g">3000m(G)</option>
                                                                <option value="dicuss_b">Dicuss(B)</option>
                                                                <option value="dicuss_g">Dicuss(G)</option>
                                                                <option value="javelin_b">Javelin(B)</option>
                                                                <option value="shotput_b">Shotput(B)</option>
                                                                <option value="shotput_g">Shotput(G)</option>
                                                                <option value="highjump_b">Highjump(B)</option>
                                                                <option value="highjump_g">Highjump(G)</option>
                                                                <option value="longjump_b">Longjump(B)</option>
                                                                <option value="longjump_g">Longjump(G)</option>
                                                        </select>
                                                
                                            </div> 
                                            <div class="form-group">
                                            <select class="form-control selectpicker"  name="pos">
                                                <option value="one">1st</option>
                                                <option value="two">2nd</option>
                                                <option value="three">3rd</option>
                                                </select>
                                            
                                            
                                            </div>                                                                                                                                
                                        </div>
                                       
                                        <div class="col-md-6">
                                           
                                           <input type="submit" class="btnRegister" name="update" value="update"/>
                                          
                                        
                                      </div>
                                      </form>
                                      
                                          
                                       
                                      
                                        <?php endif; ?> 

     <?php
                    $conn = mysqli_connect("localhost", "root","", "sports");
                    $sql="SELECT * FROM wnrs";
                    $result= mysqli_query($conn,$sql);
                    ?>
       <div class="container py-5">
    
    <CENTER><h1 class="display-4 ">Winners Details</h1></CENTER>
    
   
  
              <div class="row py-5">
                <div class="col-lg-10 mx-auto">
                  <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                      <div class="table-responsive">
                        <table id="example" style="width:100%" class="table table-striped table-bordered">
           
            <thead>
            <tr>
            <th>chessno</th>
            <th>EventName</th>
            <th>position</th>
            <th colspan="2">Edit</th>
            
            </tr>
            </thead>
            <tbody>

        <?php
          while( $row = mysqli_fetch_assoc( $result ) ) : ?>
           
            <tr>
            <td><?php echo $row['chessno']; ?></td>
            <td><?php echo $row['evname']; ?></td>
            <td><?php echo $row['pos']; ?></td>

           
            

            <td>
              <a href="winnersdetails.php?edit=<?php echo $row['SI']; ?>" class="btn btn-info">Edit</a>
              
              
              <a href="winnersdetails.php?delete=<?php echo $row['SI']; ?>" class="btn btn-danger">Delete</a>
              <?php
                    $cn = mysqli_connect("localhost", "root","", "sports");
                    if (isset($_GET['delete']))
                    {
                     
                        $id=$_GET['delete'];
                        $sql="DELETE FROM wnrs WHERE SI='$id'";
                        $rs = mysqli_query($cn, $sql);
                        $_SESSION['message']="Record has deleted";
                        $_SESSION['msg_type']="danger"; 
                      
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