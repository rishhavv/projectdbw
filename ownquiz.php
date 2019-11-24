<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die("ERROR: Could not connect. ".mysqli_connect_error());
}
$sql="use dbwproj";
mysqli_query($con,"$sql");

$sql="create table quiz(
				qname varchar (40),
				Name varchar(40),
				q1 varchar(200),
				a1 varchar(200),
				q2 varchar(200),
				a2 varchar(200),
				q3 varchar(200),
				a3 varchar(200),
				q4 varchar(200),
				a4 varchar(200),
				q5 varchar(200),
				a5 varchar(200))";
mysqli_query($con,"$sql");
				$qname=$_POST['qname'];
				$name=$_POST['name'];
				$q1=$_POST['q1'];
        $a1=$_POST['a1'];
				$q2=$_POST['q2'];
				$a2=$_POST['a2'];
				$q3=$_POST['q3'];
				$a3=$_POST['a3'];
				$q4=$_POST['q4'];
				$a4=$_POST['a4'];
				$q5=$_POST['q5'];
				$a5=$_POST['a5'];

		$sql="insert into quiz values('$qname','$name','$q1','$a1','$q2','$a2','$q3','$a3','$q4','$a4','$q5','$a5')";
    	if(mysqli_query($con,"$sql"))
		{
			header ("Location:addnew2.html");
			exit;
        }

    ?>

</body>
</html>
