<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();

session_destroy();
echo "<script>window.location.href='index.php?msg=Logout Successfully' </script>";


?>