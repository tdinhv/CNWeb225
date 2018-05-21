<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
<?php
	mysqli_set_charset($conn,'utf8');
	$IDNV = $_REQUEST['IDNV'];
	if($IDNV == ''){
		header("Location: xemttnvpb.php");
	}else{
		$rs = mysqli_query($conn,"SELECT * FROM nhanvien as n inner join phongban as p on n.idpb= p.idpb where n.IDNV='$IDNV'");
	}
?>
	<div id="content">
	<?php
		$row=mysqli_fetch_array($rs)
	?>
		<div class="edit">
			<form>
		        <h1>Sửa TT nhân viên</h1>
		        <input type="hidden" name="IDNV" value="<?php echo $row['IDNV'] ?>">	
		 		<input type="text" name="hoten" value="<?php echo $row['Hoten'] ?>">
		 		<input type="text" name="diachi" value="<?php echo $row['Diachi'] ?>">
		  		<div style="margin-top: 10px;">
					<button type="submit">Thêm</button>
				</div>
			</form>
		</div>	
	</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>
