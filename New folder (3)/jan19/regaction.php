<?php
$conn=mysqli_connect('localhost','root','','jan19');
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$address=$_POST['address'];
$skill=implode(',', $_POST['skill']);
$gender=$_POST['gen'];
$city=$_POST['city'];
$file=$_FILES['image']['name'];
$newname=uniqid().$file;
$path='upload/'.$newname;
$temp=$_FILES['image']['tmp_name'];
move_uploaded_file($temp, $path);
$eml=mysqli_query($conn,"SELECT email FROM students WHERE email='$email'")or die("email error");
$eml_count=mysqli_num_rows($eml);
if($eml_count>0){
	// echo "email already exist";
	echo "<script>window.location.href='registration.php?msg=Email already exist' </script>";
}else{
	$ins=mysqli_query($conn,"insert into students values(null,'$name','$email','$password','$address','$city','$skill','$gender','$path',0)")or die('insert error');
	if($ins){
		// $msg="Registration successfull";
		echo "<script>window.location.href='index.php?msg=Registration successfull' </script>";
	}else{
		// echo "registration faild";
		echo "<script>window.location.href='registration.php?msg=Registration Faild' </script>";
	}
}
?>