<?php
session_start();

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"users");

$name=$_POST['name'];
$pass=$_POST['pass'];

$sn="select * from test where name='$name' ";
$snn = mysqli_query($conn,$sn);
$num = mysqli_num_rows($snn);

if($num==1){
	echo "name already here..";
}
else{
	$data="insert into test (name,password) values('$name','$pass')";
	mysqli_query($conn,$data);
	echo "resistation done";
}
?>

