<?PHP
include('config.php');
session_start();
	$_SESSION['user'];
	$_SESSION['pass'];
	$_SESSION['tran'];
	$_SESSION['tran2'];

	$sql = "UPDATE user SET balance = balance -'".$_SESSION['tran2']."'WHERE user ='".$_SESSION['user']."'and pass ='".$_SESSION['pass']."'";
	
	if(!mysqli_query($con,$sql))
	{
	header("Location:transfer.html");
	exit();
	}
	else
	{

		echo "1 Row Added";
		header("Location:transfer3.php");
		exit();
	}
?>	