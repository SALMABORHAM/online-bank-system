<?PHP
	include('config.php');
	session_start();
	// username and password sent from form 
    $_SESSION['user'];
	$_SESSION['pass'];
	$trans = "SELECT * from trans WHERE afrom = '".$_SESSION['user']."'";
	$r = mysqli_query($con,$trans);
	//$result = mysqli_fetch_array($r);
	?>

	<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>


<body>
<div class="login-page">
<div class="form">
<div class="login-form" >
<center>
	
<?php
echo "<table border='1'>";
	echo "<tr><th>From</th><th>Type</th><th>To</th><th>Amount</th></tr>";
	while($res = mysqli_fetch_array($r))
	{
		echo "<tr>";
		echo "<td> ".$res['afrom']." </td><td> ".$res['type']." </td><td> ".$res['ato']." </td><td> ".$res['amount']."</td>";
		echo "</tr>";
	}?>

</center>



<a href="acc.php"><button class="login-form">Back To Account Info</button></a>

  <br><br>

</div>
    

  </div>
</div>



</body>
</html>