<?php
session_start();
require("_connection.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$class = $_POST['class'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		
		if($pass == $cpass){
			$hass = password_hash($pass,PASSWORD_DEFAULT );
			$resp = "INSERT INTO `student` (`Stu_Name`, `Stu_father`, `Stu_class`, `Stu_password`) VALUES (
			'$name','$fname','$class','$hass');";
			$res = mysqli_query($conn,$resp);
			if($res){
			echo "data Inserted successfully";
			
			$_SESSION['your_name'] = $name;
			header("location:index.php");
			}
			
		}else{
			session_start();
			$_SESSION['invailed'] = "Invailed password Please try again";
			header("location:insert.php");
			
		}
		
		
		
	}
?>

