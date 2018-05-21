<?php 
include_once('connect.php');
$tenphongban = $_POST['tenphongban'];
$sql = "insert into phongban(IDPB,Mota) Values(0,'$tenphongban')";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: xemttin.php");
}else{
	header("Location: themphongban.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>