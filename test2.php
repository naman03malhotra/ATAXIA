
<html>
<head>

<title>test</title>
</head>

<body>
<center>
<form name="search" method="post" action="test2.php">
<table border="5px" cellspacing="50px">
<tr><th>symptom 1:</th><td><select size="1" name="s1" value="none">

<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 2:</th><td><select size="1" name="s2" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 3:</th><td><select size="1" name="s3" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 4:</th><td><select size="1" name="s4" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 5:</th><td><select size="1" name="s5" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 6:</th><td><select size="1" name="s6" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 7:</th><td><select size="1" name="s7" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 8:</th><td><select size="1" name="s8" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<tr><th>symptom 9:</th><td><select size="1" name="s9" value="none">
<option>NA</option>
<option>yes</option>
<option>no</option>
</select></td></tr></br>
<input type="hidden" name="searching" value="yes"/>
<tr><td><input type="submit" name="search" value="Search!"/></td></tr>

</table>
</form>
</center>

</body>
</html>
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
$k="NA";
$searching = @$_POST['searching'];

if($searching=="yes")
  
 { 
echo"<br/><br/>"; 
echo "<CENTER><h1>Results::</h1></CENTER><p>"; 
 echo"<br/>"; 
 echo"<center>";
$cxn=mysqli_connect("localhost", "root","hamburger","test") or die("can't connect to server");
$query = "SELECT m1 FROM test WHERE (s1='$s1' OR '$s1'='$k') AND (s2='$s2' OR '$s2'='$k') AND (s3='$s3' OR '$s3'='$k') AND (s4='$s4' OR '$s4'='$k') AND (s5='$s5' OR '$s5'='$k') AND (s6='$s6' OR '$s6'='$k') AND (s7='$s7' OR '$s7'='$k') AND (s8='$s8' OR '$s8'='$k') AND (s9='$s9' OR '$s9'='$k')";

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
