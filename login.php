<?php
   include("config.php");
   session_start();
      // username and password sent from form 
      $_SESSION['user'] = $_POST['user'];
      $_SESSION['pass'] = $_POST['pass'];

	

	 $sql = "SELECT user, pass FROM user WHERE user ='" .$_SESSION['user']. "'and pass ='" .$_SESSION['pass']."'";

	  $res = mysqli_query($con,$sql);

	if (mysqli_fetch_assoc($res))
	{
	
		header("Location:proc.html");
		exit();
		
	}
	else header("Location:error.html");


		
?>