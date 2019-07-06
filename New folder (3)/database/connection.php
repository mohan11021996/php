<?php
$servername="localhost";
$username="root";
$password="";
$dbname="database";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	echo "";
}
else
{
	//echo "connection failed";
	die("connection faild beacause".mysqli_connect_error());
}
?>