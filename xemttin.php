<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
<?php
	mysqli_set_charset($conn,'utf8');
	$rs = mysqli_query($conn,'SELECT * FROM phongban');
?>
				<div id="content">
					<form class="table_thong_tin" action="xulyxoattnv.php" method="post" accept-charset="utf-8">
						<table border="1" style="width: 70%;">
						<div class="top">
							<p><a href="themphongban.php">Thêm</a></p>
							<!-- <button type="submit" class="btn">Xóa</button> -->
							<h2>Dữ liệu bảng Nhân sự</h2>
						</div>
						<tr>
							<!-- <th><input type="checkbox" id="select_all" ></th> -->
							<th>Mã Số</th><th>Phòng Ban</th><th>Chi tiết</th>
						</tr>
						<?php while ($row=mysqli_fetch_array($rs)) { ?>
							<tr>
								<!-- <td>
									<input type="checkbox" name="check_list[]" value="<?= $row['IDPB'] ?>" class="checkbox">
								</td>	 -->
								<td><?php echo $row['IDPB'] ?></td>
								<td><?php echo $row['Mota'] ?></td>
								<td>
									<a HREF="xemttnvpb.php?IDPB=<?php echo $row['IDPB'] ?>">Xem</a>
								</td>
							</tr>
						<?php } ?>
					</form>
				</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>	