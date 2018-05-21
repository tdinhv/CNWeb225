<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
<?php
	mysqli_set_charset($conn,'utf8');
	$IDPB = $_REQUEST['IDPB'];
	$rs = mysqli_query($conn,"SELECT * FROM nhanvien as n inner join phongban as p on n.idpb= p.idpb where n.IDPB='$IDPB'");
?>
				<div id="content">
					<table border="1" style="width: 70%;">
					<caption>Thông Tin Nhân Viên Phòng Ban</caption>
					<tr><th>Mã Số</th><th>Họ tên</th><th>Phòng Ban</th><th>Địa chỉ</th><th>Thao tác</th></tr>
					<?php while ($row=mysqli_fetch_array($rs)) { ?>
					<tr>
						<th><?php echo $row['IDNV'] ?></th>
						<th><?php echo $row['Hoten'] ?></th>
						<th><?php echo $row['Mota'] ?></th>
						<th><?php echo $row['Diachi'] ?></th>
						<th>
							<a HREF="suattnv.php?IDNV=<?php echo $row['IDNV'] ?>">Sửa</a>
							<a HREF="xulyxoattnv.php?IDNV=<?php echo $row['IDNV'] ?>">Xóa</a>
						</th>
					</tr>
					<?php } ?>
				</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>