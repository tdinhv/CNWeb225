<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
<?php
	mysqli_set_charset($conn,'utf8');
	$rs = mysqli_query($conn,"SELECT * FROM phongban");

?>
	<div id="content">
		<form action="xulythemnhanvien.php" method="post">
	        <h1>Thêm nhân viên</h1>
	 		<input placeholder="Họ tên" name="hoten" type="text" required="">
	 		<select name="idpb">
					<?php while ($row=mysqli_fetch_array($rs)) { ?>
						<option value="<?php echo $row['IDPB'] ?>"><?php echo $row['Mota'] ?></option>
					<?php } ?> 
				</select>
	  		<input name="diachi" placeholder="Địa chỉ" type="text" required="">
	  		<div style="margin-top: 10px;">
				<button type="submit">Thêm</button>
			</div>
		</form>
	</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>	
