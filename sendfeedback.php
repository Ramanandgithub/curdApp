<?php
	require("_connection.php");
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$date = $_POST['fetch'];
		$sql = "select * from `feedback` where Date='$date'";
		$query=mysqli_query($conn,$sql);
		
		$row = mysqli_num_rows($query);
		
		
		
	}
	
	

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fetch Feedback</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Feedback</th>
			<th>Date</th>
		</tr>
		
		<?php
			while($row = mysqli_fetch_assoc($query)){
				
			
		
		?>
		<tr>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Feedback'];?></td>
			<td><?php echo $row['Date'];?></td>
		</tr>
		
		<?php
		}
		?>
	</table>
	
</body>
</html>