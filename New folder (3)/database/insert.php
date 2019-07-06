<?php
include("connection.php");
error_reporting(0);
?>
<html>
<body>

<form action="" method="GET">
Roll No <input type ="text" name="rollno" value=""> <br><br>
Name <input type ="text" name="name" value=""> <br><br>
Class <input type ="text" name="class" value=""> <br><br>
<input type ="submit" value ="submit" name="submit">
</form>

<?php
if($_GET['submit'])
{
 $rn=$_GET['rollno'];
 $nm=$_GET['name'];
 $cl=$_GET['class'];

	if($rn!=""&&$nm!=""&&$cl!="")
	{
		$quary=" INSERT INTO STUDENT VALUES ('$rn','$nm','$cl')";
        $data=mysqli_query($conn, $quary);
		
 if($data)
{
	echo "data inserted successfully";
}
	}
	else 
	{
		echo "all fields are required";
	}
}
?>

</body>
</html>
