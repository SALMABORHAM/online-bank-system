<?PHP
include('config.php');
session_start();
 // username and password sent from form 
    $_SESSION['user'];
	$_SESSION['pass'];
	$_SESSION['tran2'] = $_POST['transaction'];	
	$_SESSION['tran'] = $_POST['transto'];	
	$sqlmoney ="Select balance from user WHERE user = '" . $_SESSION['user']. "'";
	$sqlmoneyy ="Select balance from user WHERE user = '" .$_SESSION['tran']. "'";

	$res = mysqli_query($con,$sqlmoney);
	$ress = mysqli_query($con,$sqlmoneyy);

	$sqll = "insert into trans (afrom, type, ato, amount) values ('".$_SESSION['user']."','Transfer','".$_SESSION['tran']."','".$_SESSION['tran2']."')";

	if(!mysqli_query($con,$sqll))
	{	
		echo "Couldn't Find INSERT".mysqli_error($con);
		header("Location:transfer.html");
		exit();
	}
	else
	{
		echo "1 Row Added";
		header("Location:transfer2.php");
		exit();
	}	


?>
