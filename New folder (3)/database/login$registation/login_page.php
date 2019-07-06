<?php
session_start();

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"users");

$name=$_POST['name'];
$pass=$_POST['pass'];

$sn="select * from test where name='$name' AND password='$pass'";
$snn = mysqli_query($conn,$sn);
$num = mysqli_num_rows($snn);

if($num == 1)
{
	header('location:abc.php');
}
else{
	header('location:login.php');
}
?>