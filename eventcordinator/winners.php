<?php
session_start();
                            if (isset($_POST['submit']))
                            {
                                // database connection code
                                $con = mysqli_connect('localhost', 'root', '','sports');



                                // get the post records
                                $chs = $_POST['chs'];
                                $enm = $_POST['enm'];
                                $ps = $_POST['position'];
                              
                                if (empty($chs)|| empty($ps)||empty($enm)){
                                    ;
                                }
                                else{
                                
                                  $brn = mysqli_query($con,"SELECT branch FROM $enm WHERE chessno ='$chs'");
                                  $result = mysqli_fetch_array($brn);
                                  $b=$result['branch'];
                                  echo $b;


                                    
                                    switch ($ps) {
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

                                  $qry= mysqli_query($con,"UPDATE `point_table` SET `branch`='$b',`point`=(point+$p) WHERE branch='$b'");
                                  

                                // database insert SQL code
                                $sql="INSERT INTO `wnrs`( `chessno`, `evname`, `pos`) VALUES ('$chs','$enm','$ps')";



                                // insert in database 
                                $rs = mysqli_query($con, $sql);

                                if($rs)
                                {
                                  echo "<script >alert('Winner Detail is Done');</script>";
                                }
                                }
                            }
                                ?>





<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />
<script Type="text/JavaScript" src="search.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: orange;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: transparent;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>

<body background="https://files.wallpaperpass.com/2019/10/low%20poly%20wallpaper%20010%20-%203840x2160.jpg">
<header>
    <p align="right"><a href="eventhome.php"> <button type="button" class="btn btn-info  btn-sm">Home</button></a>
</header>
<?php 
    if(isset($_SESSION['message'])): ?>
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']) ;
    ?>
 <?php endif; ?>
<div class="container">
  <div style="text-align:center">
    <h2><STRONG>Winners</STRONG> </h2>
    <p>Please enter the information about the winners</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="win.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="" method="post">
        <label for="fname">Chess No:</label>
        <input class="form-control" type="text" id="fname" name="chs" placeholder="Chess no.." autocomplete="off">
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
        <label for="pos">Position</label>
        <select class="form-control selectpicker"  name="position">
          <option value="one">1st</option>
          <option value="two">2nd</option>
          <option value="three">3rd</option>
        </select>
        <BR><BR>
        <input  class="form-control " type="submit" class="btnRegister" name ="submit" value="submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
