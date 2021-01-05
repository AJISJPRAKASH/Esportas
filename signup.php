<?php
// database connection code
 $con = mysqli_connect('localhost', 'root', '','sports');



// get the post records
$name = $_POST['name'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$ktuid = $_POST['ktuid'];
$type = $_POST['type'];


// database insert SQL code
$sql="INSERT INTO `student`( `name`, `branch`, `sem`, `email`, `username`, `password`, `ktuid`, `type`) VALUES ('$name','$branch','$sem','$email ','$username','$password','$ktuid','$type')";



// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>