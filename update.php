<?php
require("_connection.php");
$id = $_GET['id'];
$stu_name = $_GET['sname'];
$stu_f_name = $_GET['sfname'];
$class = $_GET['class'];
$date = $_GET['date'];

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Updation Page</title>
</head>
<body>
		<form action="#" method="GET">
			<div>
				<input type="text" name="id" value="<?php echo $id;?>" hidden>
			</div>
			<div>
				Name: <input type="text" name="name" value="<?php echo $stu_name;?>">
			</div>
			<div>
				Father Name: <input type="text" name="fname" value="<?php echo $stu_f_name?>">
			</div>
			<div>
				Class: <input type="number" name="class" value="<?php echo $class?>">
			</div>
			<div>
				password: <input type="date" name="date" value="<?php echo $date ?>">
			</div>
			<div>
				<input type="submit" value="Update" name="submit">
			</div>
			
		</form>
		
		
		<?php 
			if(isset($_GET['submit'])){
				$id = $_GET['id'];
				$name = $_GET['name'];
				$fname = $_GET['fname'];
				$class = $_GET['class'];
				$date = $_GET['date'];
				
				$sql = "UPDATE `student` SET Stu_Name='$name',Stu_father='$fname',Stu_class='$class',Date='$date' where Serrial='$id'";
				$query_run = mysqli_query($conn,$sql);
				if($query_run){
					echo "data updated successfully";
					header("location:welcome.php");
				}
				else{
					echo "some error occur in the code";
				}
			}
		?>
		
</body>
</html>