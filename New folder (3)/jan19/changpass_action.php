<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if(!isset($_SESSION['id'])){
	echo "<script>window.location.href='index.php?msg=Please Login' </script>";
}
$id=$_SESSION['id'];
if($_REQUEST['old_pass']!='' && $_REQUEST['new_pass']!='' && $_REQUEST['conf_pass']!='' ){
	$old_password=md5($_REQUEST['old_pass']);
	$new_password=md5($_REQUEST['new_pass']);
	$conf_password=md5($_REQUEST['conf_pass']);
	$chk_pwd=mysqli_query($conn,"SELECT * FROM students WHERE id='$id' and password='$old_password'")or die('password chk err');
	// print_r($chk_pwd);die;
	if(mysqli_num_rows($chk_pwd) > 0){
		if($new_password==$conf_password){
			$cng=mysqli_query($conn,"UPDATE students SET password='$new_password' WHERE id='$id'")or die("password updt err");
			echo "<script>window.location.href='index.php?msg=Password changed successfully' </script>";

		}else{
			echo "<script>window.location.href='changepassword.php?msg=Mismatch new password and confirm password' </script>";
		}
	}else{
		echo "<script>window.location.href='changepassword.php?msg=Invalid old password' </script>";
	}
}else{
	echo "<script>window.location.href='changepassword.php?msg=Please fill up all the field' </script>";
}
?>