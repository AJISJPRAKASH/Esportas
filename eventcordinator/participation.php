


   <?php
                                session_start();
                                $id= 0;
                                $nam='';
                                $ch_no='';
                                $ename='';
                                $update=false;
                                global $con;
                            if (isset($_POST['submit']))
                            {
                                // database connection code
                                $con = mysqli_connect('localhost', 'root', '','sports');



                                // get the post records
                                $nam=$_POST['nam'];
                                $chsno = $_POST['chessno'];
                                $eventname = $_POST['eventname'];
                               
                                if (empty($chsno)|| empty($eventname)){
                                    ;
                                }
                                else{

                                // database insert SQL code
                                $sql="INSERT INTO `participants`(`chessno`, `eventname`,`name`) VALUES ('$chsno','$eventname','$nam')";
                               



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
<header>
    <p align="right"><a href="eventhome.php"> <button type="button" class="btn btn-info  btn-sm">Home</button></a>
</header>
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
                                    <h3 class="register-heading">ADD PARTICIPANTS</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo  $nam; ?>" placeholder="Enter the Name*" name="nam"  />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="<?php echo $ch_no; ?>" placeholder="Enter the chessno*" name="chessno"  />
                                            </div>
                                            <div class="form-group">
                                                
                                                <input type="text" class="form-control" value="<?php echo $ename; ?>" placeholder="Enter eventname*" name="eventname" />
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
                    $sql="SELECT * FROM participants";
                    $result= mysqli_query($conn,$sql);
                    ?>
     
     <div class="container py-5">
    <header class="text-center ">
    <h1 class="display-4"> Participants</h1>
    
   
  </header>
  <div class="row py-5">
    <div class="col-lg-10 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
           
            <thead>
            <tr>
            <th>Name</th>
            <th>Chessno</th>
            <th>Eventname</th>
            <th colspan="2"> Action</th>

            </tr>
            </thead>
            <tbody>

        <?php
          while( $row = mysqli_fetch_assoc( $result ) ) : ?>
           
            <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['chessno']; ?></td>
            <td><?php echo $row['eventname']; ?></td>
              <td>
              <a href="participation.php?edit=<?php echo $row['SI']; ?>" class="btn btn-info">Edit</a>
              

              <a href="participation.php?delete=<?php echo $row['SI']; ?>" class="btn btn-danger">Delete</a>
              <?php
                    $cn = mysqli_connect("localhost", "root","", "sports");
                    if (isset($_GET['delete']))
                    {
                     
                        $id=$_GET['delete'];
                        $sql="DELETE FROM participants WHERE SI='$id'";
                        $rs = mysqli_query($cn, $sql);
                        $_SESSION['message']="Record has deleted";
                        $_SESSION['msg_type']="danger"; 
                      
                    } 
                  
                    if (isset($_POST['update']))
                    {
                     
                        
                        $chsno  = $_POST['chessno'];
                        $eventname = $_POST['eventname'];
                        $sql="UPDATE participants SET  chessno='$chsno',eventname='$eventname' WHERE SI='$id'";
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
