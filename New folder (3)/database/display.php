<style>
td{
	padding:10px;
}
</style>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn,$query);
$total =  mysqli_num_rows($data);

	if($total!= 0)	
{
	?>
	<table>
	<tr>
	<th>Roll No</th> 
	<th>Name</th>
	<th>Class</th>
	<th colspan="2">Operation</th>
	 </tr>
	<?php
	while($result = mysqli_fetch_assoc($data))
	{
 echo "<tr>
 <td>".$result['rollno']."</td>
 <td>".$result['name']."</td>
 <td>".$result['class']."</td>
 <td><a href='update.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a></td>
 <td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()'>Delete</a></td>
 </tr>";
}
}
else
{
echo "no record found";
}

?>
</table>

<script>
function checkdelete()
{
	return confirm('Are u sure ');
}
</script>