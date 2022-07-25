<?PHP
include('config.php');
session_start();
	$_SESSION['user'];
	$_SESSION['pass'];
	$_SESSION['sub'];
	$sql = "UPDATE user SET balance = balance -'".$_SESSION['sub']."'WHERE user ='".$_SESSION['user']."'and pass ='".$_SESSION['pass']."'";
	if(!mysqli_query($con,$sql))
	{
	header("Location:withdraw.html");
	exit();
	}
	else
	{
		header("Location:done.html");
		exit();
	}
?>	