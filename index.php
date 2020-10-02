<?php
 require_once('db_connection.php')
?>
<!DOCTYPE html>
<html>

<style>
*{
	background: blue;
}
table
{	
padding:15px; 
border-style:solid;
border-width:2px;
border-color:pink;
}
</style>

	<head>
		<title>Student details</title>
	</head>
	    <body>
		 <?php
		  $sql = "SELECT * FROM student;";
		  $result = mysqli_query($conn,$sql);
		  $resultCheck = mysqli_num_rows($result);
		  echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>name</th>
		<th>email</th>
		<th>country</th>
		<th>department</th>
		<th>Mobile</th>
		</tr>";

			  if($resultCheck > 0)
			  {
			  	while($row = mysqli_fetch_assoc($result))
			  	{
			  		echo "<tr>";
			  		echo "<td>" . $row['student_id'] ."</td>" ;
			  		echo "<td>" . $row['name'] ."</td>" ;
			  		echo "<td>" . $row['email'] ."</td>" ;
			  		echo "<td>" . $row['country'] ."</td>" ;
			  		echo "<td>" . $row['department'] ."</td>" ;
			  		echo "<td>" . $row['phoneNumber'] ."</td>" ;
			  		echo "</tr>";
			  	}
			  }
			  echo "</table>";
			mysql_close($con);
		 ?>
		</body>
</html>