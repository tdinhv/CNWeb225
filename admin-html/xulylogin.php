<?php 
include_once('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$rs = $conn->query($sql);
if($rs->num_rows > 0){
	session_start();
	$_SESSION['login_user'] = $username;
	header("Location: index.php");
}else{
	header("Location: login.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>