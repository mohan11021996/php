<?php
$conn=mysqli_connect('localhost','root','','jan19');
session_start();
if(!isset($_SESSION['id'])){
	echo "<script>window.location.href='index.php?msg=Please Login' </script>";
}
if(isset($_REQUEST['msg'])){
	echo "<p>".$_REQUEST['msg']."</p>";
}
$id=$_SESSION['id'];
$data=mysqli_query($conn,"SELECT * FROM students WHERE id='$id'")or die("select qry err");
$value=mysqli_fetch_assoc($data);
$skill=explode(',', $value['skill']);
?>
<form action='updateprofile_action.php' method='post' enctype='multipart/form-data'>
<h1>User registraion</h1>
Name:<input type="text" name="name" value="<?php echo $value['name'] ?>"><br>
Email:<input type="email" name="email" value="<?php echo $value['email'] ?>" readonly><br>
Address:<textarea name="address"><?php echo $value['address'] ?></textarea><br>
City:<select name="city">
	<option value="">Select</option>
	<option value="kolkata" <?php echo $value['city']=='kolkata'?'selected':''?> >Kolkata</option>
	<option value="mumbai" <?php echo $value['city']=='mumbai'?'selected':''?>>Mumbai</option>
	<option value="delhi" <?php echo $value['city']=='delhi'?'selected':''?>>Delhi</option>
	<option value="chennai" <?php echo $value['city']=='chennai'?'selected':''?>>Chennai</option>
</select><br>
Skill:<input type="checkbox" name="skill[]" value="php" <?php echo in_array('php', $skill)?'checked':''?> >PHP
<input type="checkbox" name="skill[]" value="android" <?php echo in_array('android', $skill)?'checked':''?>>ANDROID
<input type="checkbox" name="skill[]" value="iphone"  <?php echo in_array('iphone', $skill)?'checked':''?>>IPHONE 
<input type="checkbox" name="skill[]" value="c#" <?php echo in_array('c#', $skill)?'checked':''?>>C#<br>
Gender:<input type="radio" name="gen" value="male" <?php echo $value['gender']=='male'?'checked':''?>>Male
<input type="radio" name="gen" value="female" <?php echo $value['gender']=='female'?'checked':''?>>Female
<input type="radio" name="gen" value="others" <?php echo $value['gender']=='others'?'checked':''?>>Others<br>
Image:<input type="file" name="image"><br>
<img src="<?= $value['image'] ?>" height=100px width=100px >
<input type="submit" name="sub" value="Submit">
</form>