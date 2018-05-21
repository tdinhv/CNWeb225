<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
<?php
	mysqli_set_charset($conn,'utf8');
	$rs = mysqli_query($conn,'SELECT * FROM nhanvien as n inner join phongban as p on n.idpb= p.idpb');
?>
				<div id="content">
					<form class="table_thong_tin" action="xulyxoattnv.php" method="post" accept-charset="utf-8">
						<table border="1" style="width: 70%;">
						<div class="top">
							<p><a href="themnhanvien.php">Thêm</a></p>
							<button type="submit" class="btn">Xóa</button>
							<h2>Dữ liệu bảng Nhân sự</h2>
						</div>
						<tr>
							<th><input type="checkbox" id="select_all" ></th>
							<th>Mã Số</th><th>Họ tên</th><th>Phòng Ban</th><th>Địa chỉ</th><th>Chi tiết</th>
						</tr>
						<?php while ($row=mysqli_fetch_array($rs)) { ?>
						<tr>
							<td><input type="checkbox" name="check_list[]" value="<?= $row['IDNV'] ?>" class="checkbox"></td>
							<td><?php echo $row['IDNV'] ?></td>
							<td><?php echo $row['Hoten'] ?></td>
							<td><?php echo $row['Mota'] ?></td>
							<td><?php echo $row['Diachi'] ?></td>
							<td>
								<a HREF="suattnv.php?IDNV=<?php echo $row['IDNV'] ?>">Sửa</a>
								<a HREF="xulyxoattnv.php?IDNV=<?php echo $row['IDNV'] ?>">Xóa</a>
							</td>
						</tr>	
					</form>
					<?php } ?>
				</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>