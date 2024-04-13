<?php
require("_connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
	$feedback = $_POST['feedback'];
	$sql = "INSERT INTO `feedback`(`Feedback`)VALUES('$feedback')";
	$query = mysqli_query($conn,$sql);
	
	if($query){
		echo "data inserted successfully";
		header("location:welcome.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>feedback form</title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="icon" href="favicon.png">
</head>
<body>
  <p class="h4 text-center">Send your Feedback</p>
  <div class="container-fluid">
	  <div class="col-md-2"></div>
	  
	  <form action="#" class="container  col-md-8" method="POST">
			
			<div class="form-floating py-3 mx-3">
			  <textarea class="form-control text-center" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="feedback"></textarea>
			  <label for="floatingTextarea2">Write here your feedback</label>
			  <input type="submit" Value="Send Feedback" class="btn-primary">
			</div>
			
		</form>
		
		
		<div class="col-md-2"></div>
	</div>
	
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>