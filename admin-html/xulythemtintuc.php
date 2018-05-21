<?php 
include_once('connect.php');
$lname = $_POST['lname'];
$cid = $_POST['danhmuc'];
$giaban = $_POST['giaban']; 
$dientich = $_POST['dientich'];
$diachi = $_POST['diachi'];
$chitiet = $_POST['chitiet'];
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

$sql = "INSERT INTO `lands` (`lid`, `lname`, `description`, `date_create`, `cid`, `picture`, `area`, `gia`, `address`,`tenlh`,`dclienhe`,`sdt`, `count_views`,`care`,`statuscare`,`active`,`lat`,`lng`) VALUES (NULL, '$lname', '$chitiet', CURRENT_TIMESTAMP, '$cid', '$file_name', '$dientich','$giaban', '$diachi','Định','Vinh Xuân - Phú Vang - Thừa Thiên Huế','0962908124', 0,0,0,0,'','')";
$rs = $conn->query($sql);
if($rs > 0){
	header("Location: news.php");
}else{
	header("Location: addnews.php");
}
mysqli_free_result($rs);
$conn->close();
 ?>