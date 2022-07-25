<?PHP
	include('config.php');
	session_start();
	// username and password sent from form 
    $_SESSION['user'];
	$_SESSION['pass'];
	$info = "SELECT * from user WHERE user = '".$_SESSION['user']."'";
	$r = mysqli_query($con,$info);
	
	?>


<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">
<div class="form">
<div class="login-form" >

<?php
while($res = mysqli_fetch_array($r))
	{
echo "<b>User Name:   </b>".$res['user']."<br><br>";
echo "<b>Available Balance:   </b>".$res['balance']."<br><br>";

}
?>



<a href="hist.php"><button class="login-form">Transaction History</button></a>
   <center>   <p class="message"><a href="proc.html">Home</a></p></center>

</div>
    

  </div>
</div>



</body>
</html>