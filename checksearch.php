<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
<?php
$keyword = $_POST['keyword'];
	$clause = " WHERE ";
	$sql="SELECT * FROM nhanvien as n inner join phongban as p on n.idpb= p.idpb  ";
	if(isset($_POST['submit'])){
		if(isset($_POST['timkiem'])){
			foreach($_POST['timkiem'] as $c){
				if(!empty($c)){
					$sql .= $clause."`".$c."` LIKE '%{$keyword}%'";
					$clause = " OR ";
				}   
			}
		}
	}
$rs = mysqli_query($conn,$sql);

	echo '<table border="1" width="70%">';
	echo '<h2 style="text-align: center;">Thông Tin Nhân Viên</h2>';		
	echo '<tr><th>Mã Số</th><th>Họ tên</th><th>Phòng Ban</th><th>Địa chỉ</th></tr>';
	while ($row=mysqli_fetch_array($rs)) {
		echo '<tr>
				<th>'.$row['IDNV'].'</th>
				<th>'.$row['Hoten'].'</th>
				<th>'.$row['Mota'].'</th>
				<th>'.$row['Diachi'].'</th>		
			</tr>';
		}
?>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>