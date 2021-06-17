<?php
$conn= mysqli_connect('localhost', 'root','','sports');
$name='abc';
$branch='cs';
$chsno=rand(100,10000);
if (isset($_POST['submit']))
{
    
    $sql="INSERT INTO `tt`(`name`, `branch`, `chessno`) VALUES ('$name','$branch','$chsno')";
    $rs = mysqli_query($conn, $sql);
    echo $name;
    if($rs)
    {
   echo "Contact Records Inserted";
    }   
}
?>
<html>
<head>
</head>
<body>
<form method="post" action="">
<input type="text" id="fname" name="nme" placeholder="Your Name.." class="form-control">
<input type="submit" name="submit" value="Submit" >
</form>
</body>
</html>