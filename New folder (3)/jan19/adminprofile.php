<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if(isset($_REQUEST['msg'])){
	echo "<p>".$_REQUEST['msg']."</p>";
}
if(!isset($_SESSION['id'])){
	echo "<script>window.location.href='adminlogin.php?msg=Please Login' </script>";
}else{
	$id=$_SESSION['id'];
	$qry=mysqli_query($conn,"SELECT * FROM students")or die("qry err");
	while($val=mysqli_fetch_assoc($qry)){
	echo "Name: ".$val['name']."<br>";
	echo "Address: ".$val['address']."<br>";
	echo "Email: ".$val['email']."<br>";
	echo "Sikll: ".$val['skill']."<br>";
	echo "City: ".$val['city']."<br>";
	echo "Gender: ".$val['gender']."<br>";
	echo "Image: "."<img src=".$val['image']." height=100px width=100px ><br>";
?>
<a href="userdelete.php?id=<?= base64_encode($val['id'])?>">Delete</a>
<a href="user_status.php?id=<?= base64_encode($val['id'])?>"><?= $val['status']==0?"Active":"Deactive" ?></a>
<a href="logout.php">Logout</a>
<hr>
<?php
}
}
?>