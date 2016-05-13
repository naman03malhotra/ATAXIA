<?php

$name=@$_POST['ename'];
$lastname=@$_POST['elast'];
$password=@$_POST['epass'];
$mobile=@$_POST['emob'];
$cpassword=@$_POST['ecpass'];
$email=@$_POST['email'];
$searching = @$_POST['searching'];


if($searching=="yes")
  
 { 
 
 
 
 $cxn=mysqli_connect("localhost", "root","hamburger","bms") or die("can't connect to server");
$query="SELECT ename FROM login WHERE ename='$name'";
$result=mysqli_query($cxn,$query) or die("can't search");
$row = mysqli_fetch_assoc($result);
if ($name != $row['ename'])
{
	
	
 	if($cpassword==$password)
	{
		
	$query="INSERT INTO login(ename,elast,password,cpassword,email,mobile)
	 VALUES ('$name','$lastname','$password','$cpassword','$email','$mobile')";
	 $result=mysqli_query($cxn,$query) or die("can't search");
	
	 mysqli_close($cxn);
	 echo "registeration successful";
	 ?>
     <center>
     <a href="login_seprate.html">CLICK HERE TO PROCEEED!!</a>
     </center>
     <?php
	}
	else
		{
			echo "password do not match please re-enter";
		}
 }
 else{
	 echo "user name already taken, please choose a differnt name</br>";
	 }
 }
 ?>