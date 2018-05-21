<?php 
include_once('connect.php');
$lname = $_POST['lname'];
$cid = $_POST['danhmuc'];
$hinhanh = $_POST['hinhanh'];
$giaban = $_POST['giaban'];
$dientich = $_POST['dientich'];
$diachi = $_POST['diachi'];
$chitiet = $_POST['chitiet'];
$lid = $_POST['lid'];
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
       
      $expensions= array("jpeg","jpg","png");
       
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
      }
       
      if($file_size > 2097152) {
         $errors[]='Kích thước file không được lớn hơn 2MB';
      }
       
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"../files/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
}
	if($file_name==""){
	 $file_name = $hinhanh;
}

$sql = "update lands set lname = '$lname',gia='$giaban',cid='$cid',area='$dientich',address='$diachi',picture='$file_name' ,description='$chitiet' where lid = '$lid'";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: news.php");
}else{
	header("Location: editnew.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>