<?PHP
include('config.php');

$sql = "insert into user (fname, lname, user, pass, email, number, balance) 
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[user]','$_POST[pass]','$_POST[mail]','$_POST[tel]','$_POST[balance]')";

if (!mysqli_query($con,$sql))
{
	header("Location:sign.html");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:index.html");
	exit();
}
?>