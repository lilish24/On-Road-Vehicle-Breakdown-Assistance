<?php
	include('connection.php');

	$name = $_POST['name']; 
	$email = $_POST['email'];
	$mechname = $_POST['mechname'];
	$location = $_POST['location'];
	$comments= $_POST['comments'];

	//to prevent from mysqli injection  
	$name = stripcslashes($name);  
	$email  = stripcslashes($email);
	$mechname = stripcslashes($mechname);
	$location = stripcslashes($location);
	$comments = stripcslashes($comments);
       
	$name = mysqli_real_escape_string($con, $name);
	$email = mysqli_real_escape_string($con, $email);
	$mechname  = mysqli_real_escape_string($con, $mechname); 
	$location  = mysqli_real_escape_string($con, $location);
	$comments = mysqli_real_escape_string($con, $comments);
       
	$sql = "INSERT INTO feedback(name,email, mechname,location,comments) values('$name','$email','$mechname','$location','$comments')"; 
		if (mysqli_query($con, $sql)){
			echo'<script>alert("thank you for feedback")</script>';
		}else{
			echo"no response submited";
		}
?>
      