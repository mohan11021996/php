<?php
if(isset($_REQUEST['msg'])){
	echo $_REQUEST['msg'];
}
?>
<form action="login.php" method="post">
<h1> User Login</h1>
Email:<input type="email" name="email"><br>
Password:<input type="password" name="password"><br>
<input type="submit" name="submit" value="Login">
</form>

<a href="registration.php">New Registration</a>