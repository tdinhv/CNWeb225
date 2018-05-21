<?php 
include_once('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$rs = $conn->query($sql);

if($rs->num_rows > 0){
	session_start();
	$_SESSION['login_user'] = $username;
	header("Location: xemttin.php");

}else{
	header("Location: index.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>