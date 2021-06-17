<?php
    session_start();
 
$con = mysqli_connect('localhost','root','','dbtuts')  or die("Error " . mysqli_error($con));  
if (isset($_GET['delete']))
{

    $id=$_GET['delete'];
    $sql="DELETE FROM tbl_uploads WHERE chessno='$id'";
    $rs = mysqli_query($con, $sql);
    $_SESSION['message']="Record has deleted";
    $_SESSION['msg_type']="danger"; 
  
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

<div class="container py-5">
<CENTER><h1 class="display-4 "> Certificate table</h1></CENTER>
<div class="row py-5">
<div class="col-lg-10 mx-auto">
<div class="card rounded shadow border-0">
<div class="card-body p-5 bg-white rounded">
<div class="table-responsive">
<table id="example" style="width:100%" class="table table-striped table-bordered">
    <tr>
    <th colspan="5">Your uploads...<label><a href="certificate.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <th>File Name</th>
    <th>File Type</th>
    <th>File Size(KB)</th>
    <th>Chessno</th>
    <th>Eventname</th>

    <th>View</th>
    <th>Delete</th>

    
    </tr>
    <tbody>
    <?php
 $sql="SELECT * FROM tbl_uploads";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['chessno'] ?></td>
        <td><?php echo $row['event_name'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>

              <td>
              <a href="view.php?delete=<?php echo $row['chessno']; ?>" class="btn btn-danger">Delete</a>
              </td>









        </tr>
    
        </tbody>
        <?php
 }
 ?>
    </table>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    
</div>
</body>
</html>