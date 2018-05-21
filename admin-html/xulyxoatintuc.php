<?php 
include_once('connect.php');
$sql = "delete from lands where lid = ?";
$rs = $conn->prepare($sql);
$rs ->bind_param("s",$lid);

if(isset($_POST['check_list'])){
	$count=0;
	foreach ($_POST['check_list'] as $value) {
		$count +=1;
		$lid = $value;
		$rs ->execute();
	}
	header("Location: news.php");
}else if(isset($_REQUEST['lid'])){
	$cid = $_REQUEST['lid'];
	$rs ->execute();
	header("Location: news.php");
}else{
	header("Location: editnews.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>