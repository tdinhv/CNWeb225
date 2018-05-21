<?php 
include_once('connect.php');
$tendanhmuc = $_POST['tendanhmuc'];
$cid = $_POST['cid'];

$sql = "update categories set cname = '$tendanhmuc' where cid = '$cid'";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: cat.php");
}else{
	header("Location: editcat.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>