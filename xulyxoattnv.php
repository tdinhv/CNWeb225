<?php 
include_once('connect.php');
$sql = "delete from nhanvien where IDNV = ?";
$rs = $conn->prepare($sql);
$rs ->bind_param("s",$IDNV);

if(isset($_POST['check_list'])){
	$count=0;
	foreach ($_POST['check_list'] as $value) {
		$count +=1;
		$IDNV = $value;
		$rs ->execute();
	}
	header("Location: xemttnv.php");
}else if(isset($_REQUEST['IDNV'])){
	$IDNV = $_REQUEST['IDNV'];
	$rs ->execute();
	header("Location: xemttnv.php");
}else{
	header("Location: suattnvpb.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>