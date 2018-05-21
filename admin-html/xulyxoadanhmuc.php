<?php 
include_once('connect.php');
$sql = "delete from categories where cid = ?";
$rs = $conn->prepare($sql);
$rs ->bind_param("s",$cid);

if(isset($_POST['check_list'])){
	$count=0;
	foreach ($_POST['check_list'] as $value) {
		$count +=1;
		$cid = $value;
		$rs ->execute();
	}
	header("Location: cat.php");
}else if(isset($_REQUEST['cid'])){
	$cid = $_REQUEST['cid'];
	$rs ->execute();
	header("Location: cat.php");
}else{
	header("Location: editcat.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>