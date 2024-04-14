<?php
 require("_connection.php");
 session_start();
 

 
 if(isset($_SESSION['user'])){
	$y_name=$_SESSION['user'];
	
 }
 if($y_name == ''){
	 header("location:index.php");
  }
 
 
 
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello <?php echo $y_name;?></title>
</head>

<style>
	.welcome{
		font-size:25px;
		color: #0ee80e;
		
	}
</style>
<body>
	 
	<div>
		<a href="logout.php"><button>Logout</button></a>
	</div>
    
	<div>
		<p>Hello <span class="welcome"><?php echo $y_name;?></span>Your Welcome to our Website</p>
		<p>If you <strong>Like</strong> content of the website then Please share the <strong><a href="feedback.php">Feedback</a></strong></p>
	</div>
	<div>
		
	</div>
	<a href="insert.php"><button>Insert Data</button></a>
	<table border="2px" align="center">
		<tr>
			<th colspan="6" rowspan="2">Student Data</th>
		</tr>
		<tr>
		</tr>
		<tr>
			
			<th>Serial No.</th>
			<th>Name</th>
			<th>Father's Name</th>
			<th>class</th>
			<th>Date</th>
			<th>Operations</th>
			
				
		</tr>
		<?php
			
			
			$sql1 = "SELECT * FROM `student`";
			$query = mysqli_query($conn,$sql1);
			$row = mysqli_num_rows($query);
			echo "total number of the row = ".$row;
			while($row= mysqli_fetch_assoc($query)){
				
			
		?>
		<tr>
			<td><?php echo $row['Serrial']; ?></td>
			<td><?php echo $row['Stu_Name']; ?></td>
			<td><?php echo $row['Stu_father']; ?></td>
			<td><?php echo $row['Stu_class']; ?></td>
			<td><?php echo $row['Date']; ?></td>
			<td>
				<a href="update.php?id=<?php echo $row['Serrial'];?>&sname=<?php echo $row['Stu_Name']; ?>&sfname=<?php echo $row['Stu_father']; ?>&class=<?php echo $row['Stu_class']; ?>&date=<?php echo $row['Date']; ?>"><button>Update</button></a>
				<a href="delete.php?id=<?php echo $row['Serrial'];?>"><button>Delete</button></a>
			</td>
			
		 
		</tr>
		<?php }
		?>
	</table>
	
	<form action="#" method="POST" width="100%" align="center">
				<input type="date" name="fetch" placeholder="search...">
				<input type="submit" value="Fetch Feedback" >
	</form>
	
	
	<?php
	require("_connection.php");
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$date = $_POST['fetch'];
		
		if(!$date){
			echo "NO record found";
		}
		$sql = "select * from `feedback` where Date='$date'";
		$query=mysqli_query($conn,$sql);
		
		$row = mysqli_num_rows($query);
		
		
		
	}
	
	

?>
	
	
	
		<table border="1" width="50%" align="center">
		<tr>
			<th>ID</th>
			<th>Feedback</th>
			<th>Date</th>
			<th>Operation</th>
		</tr>
		
		<?php
			while($row = mysqli_fetch_assoc($query)){
			
		?>
		<tr>
			<td><?php echo $row['ID'];?></td>
			<td><?php echo $row['Feedback'];?></td>
			<td><?php echo $row['Date'];?></td>
			<td align="center">
				
				<a href="delete.php?id=<?php echo $row['ID'];?>"><button>Delete</button></a>
			
			</td>
		</tr>
		
		<?php
		}
		?>
	</table>

	
</body>
</html>