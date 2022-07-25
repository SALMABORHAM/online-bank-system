<?PHP
include('config.php');
session_start();
$sum =0;
	$_SESSION['user'];
	$_SESSION['pass'];
	$add = $_SESSION['add'];
	$sql = "UPDATE user SET balance = balance +'".$add."'WHERE user ='".$_SESSION['user']."'and pass ='".$_SESSION['pass']."'";
	if(!mysqli_query($con,$sql))
	{
	header("Location:deposit.html");
	exit();
	}
	else
	{
		echo "1 Row Added";
		header("Location:done.html");
		exit();
	}
?>	