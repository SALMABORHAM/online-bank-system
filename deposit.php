<?PHP
include('config.php');
session_start();
 // username and password sent from form 
    $_SESSION['user'];
	$_SESSION['pass'];
	$_SESSION['add'] = $_POST['add'];	

	$sqll = "insert into trans (afrom, type, ato, amount) values ('".$_SESSION['user']."','Deposit','".$_SESSION['user']."','".$_SESSION['add']."')";

if(!mysqli_query($con,$sqll))
{	
	echo "Couldn't Find INSERT".mysqli_error($con);
	header("Location:deposit.html");
	exit();
}
else{
	echo "1 Row Added";
	header("Location:deposit2.php");
	exit();
}	

?>
