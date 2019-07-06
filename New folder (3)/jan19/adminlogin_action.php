<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if($_POST['email']!='' && $_POST['password']!=''){
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$eml=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' and password='$password'")or die("login qry err");
	if(mysqli_num_rows($eml)==1){
		// echo "login successfull";
		// mysqli_fetch_row();
		// mysqli_fetch_assoc();
		// mysqli_fetch_array();
		$val=mysqli_fetch_assoc($eml);
		$_SESSION['adminid']=$val['id'];
		// echo $_SESSION['id'];
		echo "<script>window.location.href='adminprofile.php?msg=Login Successfull' </script>";
	}else{
		echo "<script>window.location.href='adminlogin.php?msg=Login Faild' </script>";
	}
}else{
	echo "<script>window.location.href='adminlogin.php?msg=Invalid email or password' </script>";
}
?>

