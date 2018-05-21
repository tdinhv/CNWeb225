<?php 
include_once('connect.php');
$hoten = $_POST['hoten'];
$diachi = $_POST['diachi'];
$IDNV = $_POST['IDNV'];

$sql = "update nhanvien set Hoten = '$hoten' , Diachi = '$diachi' where IDNV = '$IDNV'";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: xemttnv.php");
}else{
	header("Location: suattnvpb.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>