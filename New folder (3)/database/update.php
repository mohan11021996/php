 <?php
include("connection.php");
error_reporting(0);
$_GET['rn'];
 $_GET['nm'];
$_GET['cl'];
?>
<html>
<body>

<form action="" method="GET">
Roll No <input type ="text" name="rollno" value="<?php echo $_GET['rn'];?>"> <br><br>
Name <input type ="text" name="name" value="<?php echo $_GET['nm']; ?>"> <br><br>
Class <input type ="text" name="class" value="<?php echo $_GET['cl'];?>"> <br><br>
<input type ="submit" value ="submit" name="submit">
</form>

<?php
if($_GET['submit'])
{$rno=$_GET['rollno'];
$nme=$_GET['name'];
$cls=$_GET['class'];
$quary="UPDATE STUDENT SET NAME='$nme',CLASS='$cls' WHERE ROLLNO='$rno'";
$data=mysqli_query($conn,$quary);
 
 if($data)
 {
	 echo "record update sucess.<a href='display.php'>check the database</a>"  ;
}
else
{
	echo "record update unsucess"  ;
}
}
else
{
	echo "<font color ='red'>click on update button";
}
?>

</body>
</html>
