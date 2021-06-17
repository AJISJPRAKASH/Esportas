<?php
                            session_start();
                             $ename='100m_b';
                             $conn = mysqli_connect("localhost", "root","", "sports");  
                            if (isset($_POST['submit']))
                            {
                               


                                // get the post records
                                $ename = $_POST['enm'];
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
  <script Type="text/JavaScript" src="search.js"></script>
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
  <header>
    <p align="right"><a href="eventhome.php"> <button type="button" class="btn btn-info  btn-sm">Home</button></a>
<div class="container register">                   
                        <div class="col-md-12 register-right">
                           <form name="sign" method="post" action="">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                           
                                            <div class="form-group">
                                                
                                            <select class="form-control selectpicker" id="select-country" name="enm" data-live-search="true">
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
                    <CENTER><h6 class="heading">Insert the details to get registration details</h6></CENTER>


<?php
              
               $sql="SELECT * FROM $ename ";
               $result= mysqli_query($conn,$sql);
               ?>
  <div class="container py-5">

<CENTER><h1 class="display-4 ">Registration Details</h1></CENTER>



         <div class="row py-5">
           <div class="col-lg-10 mx-auto">
             <div class="card rounded shadow border-0">
               <div class="card-body p-5 bg-white rounded">
                 <div class="table-responsive">
                   <table id="example" style="width:100%" class="table table-striped table-bordered">
      
       <thead>
       <tr ><th colspan=5><CENTER>
       <?php echo $ename ?> </CENTER><th></tr>
       <tr>
       <th>Name</th>
       <th>branch</th>
       <th>Chessno</th>
       


       </tr>
       </thead>
       <tbody>

   <?php
     while( $row = mysqli_fetch_assoc( $result ) ) : ?>
      
       <tr>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['branch'] ?></td>
       <td><?php echo $row['chessno'] ?></td>
     
     
   
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