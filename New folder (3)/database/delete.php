      <?php
	  include("connection.php");
	  $rollno=$_GET['rn'];
	  $quary="delete from student where ROLLNO='$rollno'";
	 $data= mysqli_query($conn,$quary);
	 if($data)
	 {
		 echo"<font color ='blue'>record delete from table<a href='display.php'>check the database</a>";
		
	 }
	 else
	 {
		 echo"<font color ='red'>sorry,delete process is failed";
	 }
	 ?>