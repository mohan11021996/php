<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if(!isset($_SESSION['adminid'])){
	echo "<script>window.location.href='adminlogin.php?msg=Please Login' </script>";
}
$id=base64_decode($_GET['id']);
$del=mysqli_query($conn,"DELETE FROM students WHERE id='$id'")or die("delete err");
if($del){
	echo "<script>window.location.href='adminprofile.php?msg=User deleted Successfully' </script>";
}else{
	echo "<script>window.location.href='adminprofile.php?msg=Faild to delete user' </script>";
}
?>