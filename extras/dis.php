<!DOCTYPE html>
<html>
  <head>
    
    <title>ATAXIA</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

   

<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
	<script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

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
		


		<div id="allcontent">
		
		
				<div id="content">
							 
 <?php
//get information
$s1 =@$_POST['s1'] ;
$s2 =@$_POST['s2'] ;
$s3 =@$_POST['s3'] ;
$s4 =@$_POST['s4'] ;
$s5 =@$_POST['s5'] ;
$s6 =@$_POST['s6'] ;
$s7 =@$_POST['s7'] ;
$s8 =@$_POST['s8'] ;
$s9 =@$_POST['s9'] ;
$s9 =@$_POST['s9'] ;
$s10=@$_POST['s10'] ;
$s11=@$_POST['s11'] ;
$s12=@$_POST['s12'] ;
$s13=@$_POST['s13'] ;
$s14=@$_POST['s14'] ;
$s15=@$_POST['s15'] ;
$s16=@$_POST['s16'] ;
$s17=@$_POST['s17'] ;
$s18=@$_POST['s18'] ;
$s19=@$_POST['s19'] ;
$s20=@$_POST['s20'] ;
$s21=@$_POST['s21'] ;
$s22=@$_POST['s22'] ;
$s23=@$_POST['s23'] ;
$s24=@$_POST['s24'] ;
$s25=@$_POST['s25'] ;
$s26=@$_POST['s26'] ;
$s27=@$_POST['s27'] ;
$s28=@$_POST['s28'] ;
$s29=@$_POST['s29'] ;
$s30=@$_POST['s30'] ;
$s31=@$_POST['s31'] ;
$s32=@$_POST['s32'] ;
$s33=@$_POST['s33'] ;
$s34=@$_POST['s34'] ;
$k="NA";
$searching = @$_POST['searching'];




if($searching=="yes")
  
 { 
echo"<br/><br/>"; 
echo "<CENTER><h1>Results::</h1></CENTER><p>"; 
 echo"<br/>"; 
 echo"<center>";
$cxn=mysqli_connect("localhost", "root","hamburger","bms") or die("can't connect to server");
$query = "SELECT m1 FROM mutaion WHERE (s1='$s1' OR '$s1'='$k') AND (s2='$s2' OR '$s2'='$k') AND (s3='$s3' OR '$s3'='$k') AND (s4='$s4' OR '$s4'='$k') AND (s5='$s5' OR '$s5'='$k') AND (s6='$s6' OR '$s6'='$k') AND (s7='$s7' OR '$s7'='$k') AND (s8='$s8' OR '$s8'='$k') AND (s9='$s9' OR '$s9'='$k') AND (s10='$s10' OR '$s10'='$k') AND (s11='$s11' OR '$s11'='$k') AND (s12='$s12' OR '$s12'='$k') AND (s13='$s13' OR '$s13'='$k') AND (s14='$s14' OR '$s14'='$k') AND (s15='$s15' OR '$s15'='$k') AND (s16='$s16' OR '$s16'='$k') AND (s17='$s17' OR '$s17'='$k') AND (s18='$s18' OR '$s18'='$k') AND (s19='$s19' OR '$s19'='$k') AND (s20='$s20' OR '$s20'='$k') AND (s21='$s21' OR '$s21'='$k') AND (s22='$s22' OR '$s22'='$k') AND (s23='$s23' OR '$s23'='$k') AND (s24='$s24' OR '$s24'='$k') AND (s25='$s25' OR '$s25'='$k') AND (s26='$s26' OR '$s26'='$k') AND (s27='$s27' OR '$s27'='$k') AND (s28='$s28' OR '$s28'='$k') AND (s29='$s29' OR '$s29'='$k') AND (s30='$s30' OR '$s30'='$k') AND (s31='$s31' OR '$s31'='$k') AND (s32='$s32' OR '$s32'='$k') AND (s33='$s33' OR '$s33'='$k') AND (s34='$s34' OR '$s34'='$k')";
/*$query = "SELECT m1 FROM mutaion WHERE (s1='$s1' OR '$s1'='$k') AND (s2='$s2' OR '$s2'='$k') AND (s3='$s3' OR '$s3'='$k') AND (s4='$s4' OR '$s4'='$k') AND (s5='$s5' OR '$s5'='$k') AND (s6='$s6' OR '$s6'='$k') AND (s7='$s7' OR '$s7'='$k') AND (s8='$s8' OR '$s8'='$k') AND (s9='$s9' OR '$s9'='$k') AND (s10='$s10' OR '$s10'='$k') AND (s11='$s11' OR '$s11'='$k') AND (s12='$s12' OR '$s12'='$k') AND (s13='$s13' OR '$s13'='$k') AND (s14='$s14' OR '$s14'='$k') AND (s15='$s15' OR '$s15'='$k') AND (s16='$s16' OR '$s16'='$k') AND (s17='$s17' OR '$s17'='$k') AND (s18='$s18' OR '$s18'='$k') AND (s19='$s19' OR '$s19'='$k') AND (s20='$s20' OR '$s20'='$k') AND (s21='$s21' OR '$s21'='$k') AND (s22='$s22' OR '$s22'='$k') AND (s23='$s23' OR '$s23'='$k') AND (s24='$s24' OR '$s24'='$k') AND (s25='$s25' OR '$s25'='$k') AND (s26='$s26' OR '$s26'='$k') AND (s27='$s27' OR '$s27'='$k') AND (s28='$s28' OR '$s28'='$k') AND (s29='$s29' OR '$s29'='$k') AND (s30='$s30' OR '$s30'='$k') AND (s31='$31' OR '$31'='$k') AND (s32='$s32' OR '$s32'='$k') AND (s33='$s33' OR '$s33'='$k') AND (s34='$s34' OR '$s34'='$k')";*/

$result=mysqli_query($cxn,$query) or die("no result to display");

$anymatches=mysqli_num_rows($result);

if ($anymatches == 0) 
{ 
 echo "<h2>Sorry, but we can not find an entry to match your query...</h2><br><br>"; 
} 
else
	{echo "<table border=1 bgcolor=white cellpadding=5 cellspacing=5>";
echo"<tr><th>SYMPTOM</th></tr>";

while ($row = mysqli_fetch_assoc($result))
{
extract($row);
echo "<tr><td><center>",$m1,"</center></td></tr>";
echo "<br>\n";
}
	}

/*while($result = mysqli_fetch_assoc($result)) 
{ 
echo"<tr><td>",$result[0],"</td>";
 echo"<td>",$result[1],"</td>";
 echo"<td>",$result[2],"</td><td>",$result[3],"</td>
<td>",$result[4],"</td><td>",$result[5],"</td><td>",$result[6],"</td><td>",$result[7],"</td><td>",$result[8],"</td><td></tr>";

 }*/ 
 }
 ?>
				  
			</div>
				  <div id="rightside">
			  
				  <h2>Important Links:</h2>
				  <ul>
				  	  <li><a  target="_blank" href="http://www.hgmd.cf.ac.uk/ac/index.php">HGMD</a></li>
					  <li><a  target="_blank" href="http://www.omim.org">OMIM</a></li>
					  <li><a target="_blank" href="http://www.ncbi.nlm.nih.gov">NCBI</a></li>
					  <li><a target="_blank" href="http://www.pdb.org/pdb/home/home.do">PDB</a></li>
					  
				  </ul>
				  
                  <h2>Latest News:</h2>
                  <ul>
				  	  <li>News link 1</li>
                      <li>News link 2</li>
                      <li>News link 3</li>
                      <li>News link 4</li>
                      <li>News link 5</li>
					  
				  </ul>
			 	 

		
		<div id="footer">
			 <p>&copy;Bhaskaracharya College of Applied Sciences, University of Delhi; CSIR-Institute of Genomics and Intergrative Biology.</p>
		
		</div>
		</div>
		</div>
   </body>
</html>