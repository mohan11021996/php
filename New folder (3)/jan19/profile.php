<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if(isset($_REQUEST['msg'])){
	echo "<p>".$_REQUEST['msg']."</p>";
}
if(!isset($_SESSION['id'])){
	echo "<script>window.location.href='index.php?msg=Please Login' </script>";
}else{
	$id=$_SESSION['id'];
	$qry=mysqli_query($conn,"SELECT * FROM students WHERE id='$id'")or die("qry err");
	$val=mysqli_fetch_assoc($qry);
	echo "Name: ".$val['name']."<br>";
	echo "Address: ".$val['address']."<br>";
	echo "Email: ".$val['email']."<br>";
	echo "Sikll: ".$val['skill']."<br>";
	echo "City: ".$val['city']."<br>";
	echo "Gender: ".$val['gender']."<br>";
	echo "Image: "."<img src=".$val['image']." height=100px width=100px ><br>";
}
?>
<a href="updateprofile.php">Update Profile</a>
<a href="changepassword.php">Change Password</a>
<a href="logout.php">Logout</a>