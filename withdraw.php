<?PHP
include('config.php');
session_start();
    $_SESSION['user'];
	$_SESSION['pass'];
	$_SESSION['sub'] = $_POST['sub'];	


	$sqll = "insert into trans (afrom, type, ato, amount) values ('".$_SESSION['user']."','Withdraw','".$_SESSION['user']."','".$_SESSION['sub']."')";

	if(!mysqli_query($con,$sqll))
	{	
		header("Location:withdraw.html");
		exit();
	}
	else
	{
		header("Location:withdraw2.php");
		exit();
	}	

?>
