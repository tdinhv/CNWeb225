<?php 
include_once('connect.php');
$tendanhmuc = $_POST['tendanhmuc'];

$sql = "insert into categories(cid,cname) Values(0,'$tendanhmuc')";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: cat.php");
}else{
	header("Location: addcat.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>