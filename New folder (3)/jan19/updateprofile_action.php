<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if(!isset($_SESSION['id'])){
	echo "<script>window.location.href='index.php?msg=Please Login' </script>";
}
$name=$_POST['name'];
$address=$_POST['address'];
$skill=implode(',', $_POST['skill']);
$gender=$_POST['gen'];
$city=$_POST['city'];
if(!empty($_FILES['image'])){
	$file=$_FILES['image']['name'];
	$newname=uniqid().$file;
	$path='upload/'.$newname;
	$temp=$_FILES['image']['tmp_name'];
	move_uploaded_file($temp, $path);
}
if(empty($_FILES['image']['name'])){
$update=mysqli_query($conn,"UPDATE students SET name='$name',address='$address', skill='$skill',gender='$gender',city='$city'")or die('update profile err');
}else{
$update=mysqli_query($conn,"UPDATE students SET name='$name',address='$address', skill='$skill',gender='$gender',city='$city',image='$path'")or die('update profile err');}
if($update){
	echo "<script>window.location.href='profile.php?msg=Profile update successfully' </script>";
}else{
	echo "<script>window.location.href='updateprofile.php?msg=Faild to update profile' </script>";
}

?>