<?php
session_start();
if(!isset($_SESSION['id'])){
	echo "<script>window.location.href='index.php?msg=Please Login' </script>";
}
if(isset($_REQUEST['msg'])){
	echo "<p>".$_REQUEST['msg']."</p>";
}
?>
<form action="changpass_action.php" method="post">
<h1>Change Password</h1>
Old Password:<input type="password" name="old_pass" ><br>
New Password:<input type="password" name="new_pass" ><br>
Confirm Password:<input type="password" name="conf_pass" ><br>
<input type="submit" name="submit" value="Update" ><br>
</form>