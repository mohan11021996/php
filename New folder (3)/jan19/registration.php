<?php
if(isset($_REQUEST['msg'])){
	echo $_REQUEST['msg'];
}
?>
<form action='regaction.php' method='post' enctype='multipart/form-data'>
<h1>User registraion</h1>
Name:<input type="text" name="name"><br>
Email:<input type="email" name="email"><br>
Password:<input type="password" name="password"><br>
Address:<textarea name="address"></textarea><br>
City:<select name="city">
	<option value="">Select</option>
	<option value="kolkata">Kolkata</option>
	<option value="mumbai">Mumbai</option>
	<option value="delhi">Delhi</option>
	<option value="chennai">Chennai</option>
</select><br>
Skill:<input type="checkbox" name="skill[]" value="php">PHP
<input type="checkbox" name="skill[]" value="android">ANDROID
<input type="checkbox" name="skill[]" value="iphone">IPHONE 
<input type="checkbox" name="skill[]" value="c#">C#<br>
Gender:<input type="radio" name="gen" value="male">Male
<input type="radio" name="gen" value="female">Female
<input type="radio" name="gen" value="others">Others<br>
Image:<input type="file" name="image"><br>
<input type="submit" name="sub" value="Submit">
</form>