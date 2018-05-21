<?php 
include_once('connect.php');
session_start();
$username = $_POST['username'];
$role = $_POST['role'];
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];
 	mysqli_set_charset($conn,'utf8');
    $rsCheck = mysqli_query($conn,"select * from users where username ='$username'");
if($rsCheck->num_rows >0){
	$err_user ="Tên tài khoản đã tồn tại"
	header("Location: adduser.php?err_user=$err_user&username=$username");
	exit();
}
if($password != $conpassword){
	header("Location: adduser.php?err_pass=Vui lòng xác nhận mật khẩu trùng!");
	exit();
}
$sql = "insert into users(id,username,fullname,password,enable,role_id) Values(0,'$username','$fullname','$password',1,'$role')";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: users.php");
}else{
	header("Location: adduser.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>