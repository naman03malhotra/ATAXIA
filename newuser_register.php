<!DOCTYPE html>
<html>
  <head>
    
    <title>ATAXIA</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

   

</head>
   <body>
   		<div id="all">
<div id="top">
			 <div id="logo">
			 	 <img src="img/others/Institute-of-Genomics-Integrative-Biology (1).bmp" width="250" height="165">
			 </div>
           <div id="logo2">
			 	 <img src="img/others/180px-BhaskaracharyaCollegeOfAppliedSciencesLogo.png" width="185" height="175" alt="" border="">
		   </div>
           <div id="social2">
            <h1>
            
          <p align="center">&nbsp;</p></h1>
           </div>
		   <div id="topic">
			   <font color="#000066" size="+2" face="Courier New, Courier, monospace" >
               <strong>
				 Genetic Curation </br>of Ataxia Phenomes for</br>
                 Establishment of Predictive</br> and Rapid
                 Diagnostic Paradigm
                 </strong>
                 </font>
			 </div>
		</div>
		<div id="topnav">
			 <ul>
			 	 <li><a href="index.html">Home</a></li>
				 <li><a href="login_seprate.html">Log In</a></li>
				 
				 <li><a href="#">HELP</a></li>
                 <li><a href="#">FAQ</a></li>
				 <li><a href="contactus.php">SUGGESTIONS</a></li>
				 <li><a href="#">About Us</a></li>
			</ul>
		</div>
     
       
  <center><font size="7" color="black" face="Times New Roman, Times, serif">
 Enter Your Details</font></center>
<form action="newuser_register.php" method="post">
<center>
<table>
<hr size=3 color="black" width="60%">
<tr><th>*Fields are mandatory.</br> *First name will be your ID for login</th></tr>
<tr><td>First name:*</td><td> <input type="text" name="ename" size="20" required maxlength="25"></td></tr>
<tr><td>Last name: </td><td><input type="text" name="elast" size="20" maxlength="25"> </td></tr>
<tr><td>Email:</td> <td> <input type="email"  name="email" size="20" maxlength="50" pattern="^.+@.+\.com$">    </td></tr>
<tr><td>Mobile no:</td> <td> <input type="text"  name="emob" size="20" pattern="[0-9]{10}" maxlength="10">   </td></tr>
<tr><td>Password*:</td><td><input name="epass" size="20" type="password" required/></br></td></tr>
<tr><td>Confirm Password*:</td><td><input name="ecpass" size="20" type="password" required/></br></td></tr>

<input type="hidden" name="searchin" value="yes"/>
<td><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="submit"  value="Submit"></td> 

<td><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Reset!"></td>
</tr>
</table>
</form>
</center>

<div id="footer">
			 <p>&copy;Bhaskaracharya College of Applied Sciences, University of Delhi; CSIR-Institute of Genomics and Intergrative Biology.</p>
		
		</div>
 </div>
</body>
</html>


<?php

$name=@$_POST['ename'];
$lastname=@$_POST['elast'];
$password=@$_POST['epass'];
$mobile=@$_POST['emob'];
$cpassword=@$_POST['ecpass'];
$email=@$_POST['email'];
$searching = @$_POST['searchin'];


if($searching=="yes")
  
 { 
 
 
 
 $cxn=mysqli_connect("localhost", "root","hamburger","bms") or die("can't connect to server");
$query="SELECT ename FROM login WHERE ename='$name'";
$result=mysqli_query($cxn,$query) or die("can't search");
$row = mysqli_fetch_assoc($result);
/*extract($row);*/
if (!($name==$row['ename']))/**/
{
	
	
 	if($cpassword==$password)
	{
		
	$query="INSERT INTO login(ename,elast,password,cpassword,email,mobile)
	 VALUES ('$name','$lastname','$password','$cpassword','$email','$mobile')";
	 $result=mysqli_query($cxn,$query) or die("can't search");
	
	 mysqli_close($cxn);
	  ?>
	 <center><font size="6" color="WHITE" face="Verdana, Geneva, sans-serif">
Registeration successful, Now you can Log-In
</br>
     
     </center>
     </font>
     <?php
	}
	else
		{
			?>
			<center><font size="6" color="WHITE" face="Verdana, Geneva, sans-serif">
password do not match please re-enter</font></center>
			<?php
		}
 }
 else{
	 ?>
     <center><font size="6" color="WHITE" face="Verdana, Geneva, sans-serif">
User name already taken, please choose a different name</font></center>
       <?php
	 }
 }
 ?>