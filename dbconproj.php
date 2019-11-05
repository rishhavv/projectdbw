<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die("ERROR: Could not connect. ".mysqli_connect_error());
}
$sql="create database dbwproj";
mysqli_query($con,"$sql");

$sql="use dbwproj";
mysqli_query($con,"$sql");

$sql="create table login(
				name varchar (40),
				username varchar(20),
        email varchar(30),
        password varchar(20))";
mysqli_query($con,"$sql");
				$name=$_POST['Name'];
        $uname=$_POST['Username'];
        $email=$_POST['email'];
        $pass=$_POST['password'];

		$sql="insert into login values('$name','$uname','$email','$pass')";
    	if(mysqli_query($con,"$sql"))
		{
			header ("Location:signup2.html");
			exit;
        }

    ?>

</body>
</html>
