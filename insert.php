<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<?php
			session_start();
			if(isset($_SESSION['invailed'])){
				echo $_SESSION['invailed'];
			}
		?>
		<form action="signup.php" method="post">
			<div>
				Name: <input type="text" name="name">
			</div>
			<div>
				Father Name: <input type="text" name="fname">
			</div>
			<div>
				Class: <input type="number" name="class">
			</div><div>
				password: <input type="password" name="pass">
			</div><div>
				confirm Password: <input type="password" name="cpass">
			</div><div>
				<input type="submit" value="Submit">
			</div>
			
		</form>
		
</body>
</html>