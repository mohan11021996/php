<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if(!isset($_SESSION['adminid'])){
	echo "<script>window.location.href='adminlogin.php?msg=Please Login' </script>";
}
$user_id = base64_decode($_GET['id']);
$cng=mysqli_query($conn,"UPDATE students set status=(case when status=0 then 1 else 0 end)WHERE id='$user_id'")or die("status err");
if($cng){
	echo "<script>window.location.href='adminprofile.php?msg=User deleted Successfully' </script>";
}else{
	echo "<script>window.location.href='adminprofile.php?msg=Faild to delete user' </script>";
}
?>