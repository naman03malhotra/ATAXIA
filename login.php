<?php
$name=@$_POST['eid'];
$password=@$_POST['epass'];
$searching = @$_POST['searching'];
if($searching=="yes")
  
 { 
$cxn=mysqli_connect("localhost", "root","hamburger","bms") or die("can't connect to server");
$query="SELECT password FROM login WHERE ename='$name'";
$result=mysqli_query($cxn,$query) or die("can't search");
$row = mysqli_fetch_assoc($result);
if ($password == $row['password'])
	{
	echo "Login accepted </br>";
?>
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
        
                
        <center>
        <h1>
        <a href="previous.html" > Previous Records>></a>
        </br>
        <a href="new_patient.html"> New Patient>></a>
        </h1>
        </center>
        <div id="footer">
			 <p>&copy;Bhaskaracharya College of Applied Sciences, University of Delhi; CSIR-Institute of Genomics and Intergrative Biology.</p>
		
		</div>
        </div>
        </body>
        </html>
<?php
	} 
else
	{
	echo "Invalid password, go back and try again";
	}
 }
?>