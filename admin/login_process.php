<?php 
include("../global.php");

$email = mysqli_real_escape_string($connection,$_POST["email"]);
$password = mysqli_real_escape_string($connection,$_POST["password"]);

$result = mysqli_query($connection,"select * from users where email = '$email' and password = '$password'");

if (mysqli_num_rows($result) == 0) { //invalid login
	$errormessage = "<br>" . "Invalid Login!";
	include("login_form.php");
	die();

} else {
	$row = mysqli_fetch_assoc($result);
	$_SESSION["id"] = $row["id"];
	$_SESSION["firstname"] = $row["firstname"];

	$current_time = date("Y-m-d H:i:s");
	mysqli_query($connection,"update users set last_login = '$current_time' where id = " . $_SESSION["id"]);
	header("Location: menu_list.php");
}
?>