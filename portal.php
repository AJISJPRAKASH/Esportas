<?php
session_start();
$uname=$_SESSION['uname'];
$pswd=$_SESSION['pswd'];
$conn= mysqli_connect('localhost', 'root', '','sports');
$brn = mysqli_query($conn,"SELECT name FROM student WHERE username='$uname'and 	password='$pswd'");
$rs = mysqli_fetch_array($brn);
$b=$rs['name'];
$sql=" SELECT * FROM `portal` WHERE username='$uname'and pswd='$pswd'";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<link rel="stylesheet" type="text/css" href="prt.css">









<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<br>
<div class="col-md-12">  
    <div class="col-md-4">      
        <div class="portlet light profile-sidebar-portlet bordered">
            <div class="profile-userpic">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-responsive" alt=""> </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"> <?php echo $b ?></div>
                <div class="profile-usertitle-job"> Participants </div>
            </div>
            <div class="profile-userbuttons">
               <a href="home.php"> <button type="button" class="btn btn-info  btn-sm">Home</button></a>
               <a href="index.php">  <button type="button" class="btn btn-info  btn-sm">Logout</button></a>
            </div>
            <div class="profile-usermenu">
                <ul class="nav">
                   
                    <li>
                        <a href="#">
                            <i class="icon-settings"></i> Registration detail </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8"> 
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">Events</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table">
                    <thead>
                    
                        <tr>
                            <th>SI</th>
                            <th>username</th>
                            <th>Password</th>
                            <th>Chessno for event</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >1</td>
                            <?php
                    while( $row = mysqli_fetch_assoc( $result ) ) : ?>
           
                   
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['pswd']; ?></td>
                    <td><?php echo $row['chessno']; ?></td>

                   
                           
                        </tr>
                        
                        
                        <?php endwhile; ?>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>