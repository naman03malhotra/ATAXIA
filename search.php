<html>
<head>
<title>
SEARCH
</title>
</head>
<body background="z.jpg">
<center>
<font size="6.9" >
<u><i>
</br>
</br>
PLEASE  SELECT THE CATEGORY AND ENTER THE KEYWORD
</u></i></font>
</center>
<br>
<br><br><br>
<p align="right"><font size=4><a href="project.html">HOME</a></font></p>
<hr color="white">
<br><br><br><br>
<center>
<form name="search" method="post" action="search.php">
<font size=5>CATEGORY:</font>
<select name="field">
<option>Select</option>
<option value="ename">First name</option>
<option value="elast"> Last name</option>
<option value="emob">Mobile no.</option>
<option value="eh_fname">Father/Husband's name</option>
<option value="edob">DOB</option>
<option value="e_hn">House Number</option>
<option value = "e_st"> Street name</option>
<option value= "e_loc"> Locality</option>
<option value= "epin" > Pin Code</option>
<option value="ecity"> City</option>
<option value="esta"> State</option>
<option value="eocc"> Occupation</option>
<option value= "ebg"> Blood Group</option>
<option value= "email"> E-mail</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;
<font size=5>KEYWORD:</font><input type="text" name="find"/>
<input type="hidden" name="searching" value="yes"/>
<input type="submit" name="search" value="Search!"/>
</form>
</center>

</body>
</html>
<?php
//get information
$field =@$_POST['field'] ;
$find = @$_POST['find'] ;
$searching = @$_POST['searching'] ;

 //once submitted  
//$con=mysql_connect('localhost','root','');
if($searching=="yes")
  
 { 
echo"<br/><br/>"; 
echo "<CENTER><h1>Results</h1></CENTER><p>"; 
 echo"<br/>"; 


 //blank search returns all results
 
mysql_connect("localhost", "root", "hamburger") or die(mysql_error());
mysql_select_db("bms") or die(mysql_error()); 
 
 //filter search term 
if (trim($find) == '')
	echo "Enter a keyword...";

else
{	

$find = strtoupper($find); 
 $find = strip_tags($find); 
 $find = trim ($find); 
 //search database 
 $query = "SELECT * FROM patientdata WHERE upper($field) LIKE '%$find%'";
 $sql=mysql_query($query);
//number of results or error 
  $anymatches=mysql_num_rows($sql);  
//display the result

 if ($anymatches == 0) 
{ 
 echo "<h2>Sorry, but we can not find an entry to match your query...</h2><br><br>"; 
}
else
	{echo "<table border=1 bgcolor=white cellpadding=5 cellspacing=5>";
echo"<tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>MIDDLE NAME</th>";
echo"<th>GENDER</th><th>MOBILE NO.</th><th>FAX</th><th>E-mail</th><th>DOB</th><th>FATHER/HUSBAND'S NAME</th><th>MOTHER'S NAME</th>";
echo"<th>HOUSE NO.</th><th>STREET</th><th>LOCALITY</th><th>STATE</th><th>CITY</th><th>PIN CODE</th>";
echo"<th>LANDLINE</th><th>OFF. ADD.</th><th>OFF.PINCODE</th><th>OFF. LAND.</th><th>OCCUPATION</th>";
echo"<th>BLOOD GROUP</th><th>REMARKS</th>"; 
	
	 while($result = mysql_fetch_array($sql)) 
 { 

echo"<tr><td>",$result[0],"</td>";
 echo"<td>",$result[1],"</td>";
 echo"<td>",$result[2],"</td><td>",$result[3],"</td>
<td>",$result[4],"</td><td>",$result[5],"</td><td>",$result[6],"</td><td>",$result[7],"</td><td>",$result[8],
"</td><td>",$result[9],"</td><td>",$result[10],"</td><td>",$result[11],"</td><td>",$result[12],
"</td><td>",$result[13],"</td><td>",$result[14],"</td><td>",$result[15],
"</td><td>",$result[16],"</td><td>",$result[17],"</td><td>",$result[18],"</td><td>",$result[19],
"</td><td>",$result[20],"</td><td>",$result[21],"</td><td>",$result[22],"</td><td>",$result[23],
"</td><td>",$result[24],"</td>;

 } 
	}
 
 }
 }
 
 ?> 

