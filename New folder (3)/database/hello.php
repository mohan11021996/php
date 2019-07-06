<?php

include("connection.php");
$quary=" INSERT INTO STUDENT VALUES ('5','saholooo','btach')";
$data=mysqli_query($conn, $quary);
if($data)
{
	echo "data inserted successfully";
}
?>