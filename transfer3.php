<?PHP
include('config.php');
session_start();
	$_SESSION['user'];
	$_SESSION['pass'];
	$_SESSION['tran'];
	$_SESSION['tran2'];
		$sqll = "UPDATE user SET balance = balance +'".$_SESSION['tran2']."'WHERE user ='".$_SESSION['tran']."'";
		if(!mysqli_query($con,$sqll))
		{
		header("Location:transfer.html");
		exit();
		}
		else
		{
		echo "1 Row Added";
		header("Location:done.html");
		exit();
		}	
?>	