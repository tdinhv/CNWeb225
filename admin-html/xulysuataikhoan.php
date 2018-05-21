<?php 
include_once('connect.php');
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$id = $_POST['id'];

$sql = "update users set fullname = '$fullname',password='$password' where id = '$id'";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: users.php");
}else{
	header("Location: edituser.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>