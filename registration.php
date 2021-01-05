<?php
session_start();
$uname=$_SESSION['uname'];
$pswd=$_SESSION['pswd'];
$chsno='';
$update="false";
$flag=false;
$con= mysqli_connect('localhost', 'root', '','sports');
$fgt = mysqli_query($con,"SELECT flag FROM portal WHERE username='$uname'and pswd='$pswd'");
if(!(mysqli_fetch_array($fgt))==NULL){
  $fnt = mysqli_query($con,"SELECT flag FROM portal WHERE username='$uname'and pswd='$pswd'");
 $qrty = mysqli_fetch_array($fnt);
  $flag=$qrty['flag'];
 
}
else{
  ;
}





 ?>



<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="sign.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

<script type="text/javascript">

function emptyval()
{
	
	if(document.for.name.value=="")
	{	
		alert("Please enter Name");
	    return;	
	}
	

}
function checkboxlimit(checkgroup, limit){
	var checkgroup=checkgroup
	var limit=limit
	for (var i=0; i<checkgroup.length; i++){
		checkgroup[i].onclick=function(){
		var checkedcount=0
		for (var i=0; i<checkgroup.length; i++)
			checkedcount+=(checkgroup[i].checked)? 1 : 0
		if (checkedcount>limit){
			alert("You can only select a maximum of "+limit+" checkboxes")
			this.checked=false
			}
		}
	}
}

</script>

<style>
* {
  box-sizing: border-box;
  
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}




.bg-contact2 {
  width: 100%;  
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}


.container-contact2 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background: rgba(219,21,99,0.8);
  background: -webkit-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
  background: -o-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
  background: -moz-linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
  background: linear-gradient(45deg, rgba(213,0,125,0.8), rgba(229,57,53,0.8));
}

.wrap-contact2 {
  width: 790px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  padding: 72px 55px 90px 55px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>
<body>
                                          <?php
                                              if ($flag==false):
                                            ?>

<p></p>

<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">

		<div class="container-contact2">
		 
			<div class="wrap-contact2">
			<h2>Registration Form</h2>
<div class="container">
  <form  name="for" method="POST">
    <div class="row">
       <label for="fname">Name</label>
       <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your Name.." class="form-control">
      </div>
    </div>
    <div class="row">
      
        <label for="branch">Branch</label>
      
      <div class="form-group">
        <select class="form-control" name="branch">
            <option value="CSE" name="cse" selected>CSE</option>
            <option value="ECA" name="ec_A">EC-A</option>
            <option value="ECB" name="ec_b">EC-B</option>
            <option value="MECH"name="mech">MECH</option>
            <option value="PROD"name="prod">PRODUCTION</option>
            <option value="AUTO"name="auto">AUTO</option>
            <option value="BT"name="bt">BT</option>
        </select>
    </div>
    </div>

    <div class="row">
      <div class="form-group">
        <div class="maxl">
            <label class="radio inline"> 
                <input type="radio" name="gender" value="m" checked>
                <span> Male </span> 
            </label>
            <label class="radio inline"> 
                <input type="radio" name="gender" value="f">
                <span>Female </span> 
            </label>
        </div>
    </div>
  </div>
  
	
		<div class="row">
      <label for="lname">Events</label>
        <div class="form-check">
        <input name="h" value="0" type="hidden">
        <input name="t" value="0" type="hidden">
        <input name="f" value="0" type="hidden">
        <input name="th" value="0" type="hidden">
        <input name="ft" value="0" type="hidden">
        <input name="ei" value="0" type="hidden">
        <input name="dicuss" value="0" type="hidden">
        <input name="j" value="0" type="hidden">
        <input name="longjump" value="0" type="hidden">
        <input name="highjump" value="0" type="hidden">
        <input name="shotput" value="0" type="hidden">
     
        
            <input class="form-check-input" type="checkbox" id="ev" value="100" name="h"> 100 m<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="200" name="t"> 200 m<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="400"  name="f"> 400 m<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="3000" name="th"> 3000 m<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="1500"  name="ft"> 1500 m<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="800"  name="ei"> 800 m<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="Dicussthrow"  name="dicuss"> Discuss Throw<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="Javelin"  name="j"> Javelin Throw<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="Longjump"  name="longjump"> Long Jump<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="Highjump"  name="highjump"> High Jump<br>
            <input class="form-check-input" type="checkbox"  id="ev" value="Shotput"  name="shotput"> Shot Put<br>
        </div>
      </div>
		
		
      <div class="row">
       <BR> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" onclick="emptyval()">
      </div>
		
		
      </div>
    </div>
    <?php
         if (isset($_POST['submit']))
         {
             // database connection code
             $conn= mysqli_connect('localhost', 'root', '','sports');



             // get the post records
             $name = $_POST['name'];
             $branch = $_POST['branch'];
             $gender = $_POST['gender'];
             $e100 = $_POST['h'];
             $e200 = $_POST['t'];
             $e400 = $_POST['f'];
             $e300 = $_POST['th'];
             $e150 = $_POST['ft'];
             $e80 = $_POST['ei'];
             $dicuss = $_POST['dicuss'];
             $javelin=$_POST['j'];
             $longjump = $_POST['longjump'];
             $shotput = $_POST['shotput'];
             $highjump = $_POST['highjump'];
             $chsno=rand(100,1000);
            //100m
             if (!empty($name)&& !empty($branch)&&!empty($e100) )
             {
         
                 if($gender=='m')
                 {
                  $sql="INSERT INTO `100m_b`(`name`, `branch`, `chessno`) VALUES ('$name' ,'$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                  {
                  $update="true";
                  }
                  else{
                    echo "error";
                  }
                }
                 
                
                else
                {
                  $sql="INSERT INTO `100m_g`(`name`, `branch`, `chessno`) VALUES ('$name','$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                    {
                      $update="true";
                    }
                    else{
                      echo "error";
                    }
                     
                } 
              }

//200m
              if (!empty($name) && !empty($branch) &&!empty($e200) )
              {
          
                  if($gender=='m')
                  {
                       $sql="INSERT INTO `200m_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                       $rs = mysqli_query($conn, $sql);
                       if($rs)
                       {
                        $update="true";
                       }
                       else{
                        echo "error";
                      }
                  }
                  else{
                         $sql="INSERT INTO `200m_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                         $rs = mysqli_query($conn, $sql);
                         if($rs)
                         {
                          $update="true";
                         }
                         else{
                          echo "error";
                        }
                     }
              } 

//400m
              if (!empty($name)&& !empty($branch)&&!empty($e400) )
              {
          
                  if($gender=='m')
                  {
                  $sql="INSERT INTO `400m_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                  {
                    $update="true";
                  }
                  else{
                    echo "error";
                  }
                  }
                  else{
                  $sql="INSERT INTO `400m_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                  {
                    $update="true";
                  }
                  else{
                    echo "error";
                  }
                  }
              } 
  //3000m
              if (!empty($name)&& !empty($branch)&&!empty($e300) )
              {
          
                  if($gender=='m')
                  {
                  $sql="INSERT INTO `3000m_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                  {
                    $update="true";
                  }
                  else{
                    echo "error";
                  }
                  }
                  else{
                  $sql="INSERT INTO `3000m_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                  {
                    $update="true";
                  }
                  else{
                    echo "error";
                  }
                  }
              } 


//1500m
              if (!empty($name)&& !empty($branch)&&!empty($e150) )
              {
          
                  if($gender=='m')
                  {
                  $sql="INSERT INTO `1500m_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                  {
                    $update="true";
                  }
                  else{
                    echo "error";
                  }
                  }
                  else{
                  $sql="INSERT INTO `1500_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                  $rs = mysqli_query($conn, $sql);
                  if($rs)
                  {
                    $update="true";
                  }
                  else{
                    echo "error";
                  }
                  }
              } 




//800m

              if (!empty($name)&& !empty($branch)&&!empty($e80) )
             {
         
                 if($gender=='m')
                 {
                 $sql="INSERT INTO `800m_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		            else{
                    echo "error";
                  }
                 }
                 else{
                 $sql="INSERT INTO `800m_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		            else{
                    echo "error";
                  }
                 }
             } 
//dicuss
             if (!empty($name)&& !empty($branch)&&!empty($dicuss) )
             {
         
                 if($gender=='m')
                 {
                 $sql="INSERT INTO `dicuss_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		                 else{
                    echo "error";
                  }
                 }
                 else{
                 $sql="INSERT INTO `dicuss_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		                else{
                    echo "error";
                  }
                 }
             } 

    //javelin
             if (!empty($name)&& !empty($branch)&&!empty($javelin) )
             {
         
                 if($gender=='m')
                 {
                 $sql="INSERT INTO  `javelin_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		                 else{
                    echo "error";
                  }
                 }
                 else{
                 $sql="INSERT INTO `javelin_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		                else{
                    echo "error";
                  }
                 }
             } 
//longjump
             if (!empty($name)&& !empty($branch)&&!empty($longjump) )
             {
         
                 if($gender=='m')
                 {
                 $sql="INSERT INTO `longjump_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		               else{
                    echo "error";
                  }
                 }
                 else{
                 $sql="INSERT INTO `longjump_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
                 }
             } 
  //highjump
             if (!empty($name)&& !empty($branch) && !empty($highjump) )
             {
         
                 if($gender=='m')
                 {
                 $sql="INSERT INTO `highjump_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
 		            else{
                    echo "error";
                  }
                 }
                 else{
                 $sql="INSERT INTO `highjump_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		           else{
                    echo "error";
                  }
                 }
             } 

//shotput
             if (!empty($name)&& !empty($branch)&&!empty($shotput) )
             {
         
                 if($gender=='m')
                 {
                 $sql="INSERT INTO `shotput_b`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		             else{
                    echo "error";
                  }
                 }
                 else{
                 $sql="INSERT INTO `shotput_g`( `name`, `branch`,`chessno`) VALUES ('$name','$branch','$chsno')";
                 $rs = mysqli_query($conn, $sql);
                 if($rs)
                 {
                  $update="true";
                 }
		            else{
                    echo "error";
                  }
                 }
             } 


    if($update="true")
      {
        echo $uname;
        echo $pswd;
        echo $chsno;
        $flag='true';
        echo $flag;
        $isrt="INSERT INTO `portal`(`username`, `pswd`,`chessno`,`flag`) VALUES ('$uname','$pswd','$chsno','$flag')";
      
        $rs = mysqli_query($conn, $isrt);
        echo "<script >alert('Registration is Done');</script>";
      

      }
 



        }
           
            ?>
    
   
  </form>
</div>
</div>
</div>
</div>



<script Type="text/JavaScript">
checkboxlimit(document.for.ev, 3)
</script>
<?php else: ?>
  <div>
    <Center>The registration details shown in <a href="portal.php">Portal</a></Center>
</div>
<?php endif; ?> 
</body>
</html>
