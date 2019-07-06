<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if($_POST['email']!='' && $_POST['password']!=''){
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$eml=mysqli_query($conn,"SELECT * FROM students WHERE email='$email' and password='$password'")or die("login qry err");
	if(mysqli_num_rows($eml)==1){
		$val=mysqli_fetch_assoc($eml);
		if($val['status']==0){
			$_SESSION['id']=$val['id'];
			echo "<script>window.location.href='profile.php?msg=Login Successfull' </script>";
		}else{
			echo "<script>window.location.href='index.php?msg=You are deactiveted by admin' </script>";
		}
	}else{
		echo "<script>window.location.href='index.php?msg=Login Faild' </script>";
	}
}else{
	echo "<script>window.location.href='index.php?msg=Invalid email or password' </script>";
}
?>

