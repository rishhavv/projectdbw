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
$uname = $_POST['Username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM login where USERNAME = '$uname' or EMAIL = '$uname' and Password = '$pass'";

if($result = mysqli_query($link, $sql))
{
if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_array($result);
    $message = "Successfull Login";
    $a1=$row["name"];
    echo "Welcome $a1";
     echo "<script type='text/javascript'>alert('$message');</script>";
}

else
    echo "<p align='center'><font color='black' >Please enter valid Username and Password<font></p>";

}
else{
  echo"failed";
}

header ("Location:homepage.html");
exit;
?>
</body>
</html>
