<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>loginpage</title>
</head>
<body>
	<div>
		<nav>
			<a href="insert.php"><button>SignUP</button></a>
			
		</nav>
	 </div>
	<form action="#" method="POST">
		<div>
			<div>
				Username <input type="text" name="uname" placeholder="Username..">
			</div>
				
			<div>
				Enter your Password:<input type="password" name="pass">
			</div>
			<div>
				<input type="submit" value="Submit">
			</div>
		</div>
	</form>
	
	
	<?php
		require("_connection.php");
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$uname = $_POST['uname'];
			$pass = $_POST['pass'];
			
			$sql = "select * from `student` where Stu_Name='$uname'";
			$res = mysqli_query($conn,$sql);
			
			$row = mysqli_num_rows($res);
			
			if($row == 1){
				
				while($rows = mysqli_fetch_assoc($res)){
				
				
				if(password_verify($pass,$rows['Stu_password'])){
					session_start();
				    $_SESSION['user'] = $rows['Stu_Name'];
					header("location:welcome.php");
					
					
				}
				else{
					echo "Invailed Credential";
					
				}
				}
			}
			else{
				echo "Invailed Credential";
				
			}
		
				

			
				
			
		}
	?>
</body>
</html>