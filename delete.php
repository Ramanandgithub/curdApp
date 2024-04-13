<?php
	require("_connection.php");
	
	$id = $_GET['id'];
	
	
		echo $id;
		
	$sql = "DELETE FROM `student` where Serrial='$id'";
	$sql1 = "DELETE FROM `feedback` where ID='$id'";
	$result = mysqli_query($conn,$sql);
	$result1 = mysqli_query($conn,$sql1);
	if($result){
		header("location:welcome.php");
	}
	
	
?>