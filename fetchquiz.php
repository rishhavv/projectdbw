<html>
<body>
<?php
$link=mysqli_connect("localhost","root","");
if(!$link)
{
	die("ERROR: Could not connect. ".mysqli_connect_error());
}

$sql="use dbwproj";
mysqli_query($link,$sql);

$sql = "SELECT * FROM quiz";

if($result = mysqli_query($link, $sql))
{
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_array($result);
    $qn=$row["qname"];
		$q1=$row["q1"];
		$a1=$row['a1'];
		$q2=$row['q2'];
		$a2=$row['a2'];
		$q3=$row['q3'];
		$a3=$row['a3'];
		$q4=$row['q4'];
		$a4=$row['a4'];
		$q5=$row['q5'];
		$a5=$row['a5'];

}

else
    echo "<p align='center'><font color='black' >Please enter valid Username and Password<font></p>";

}
else{
  echo"failed to get values";
}
``
header ("Location:homepage.html");
exit;
?>
</body>
</html>
