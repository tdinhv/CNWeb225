<?php 
include_once('connect.php');
$hoten = $_POST['hoten'];
$IDPB = $_POST['idpb'];
$diachi = $_POST['diachi'];

$sql = "insert into nhanvien(IDNV,Hoten,IDPB,Diachi) Values(0,'$hoten','$IDPB','$diachi')";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: xemttnv.php");
}else{
	header("Location: themnhanvien.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>