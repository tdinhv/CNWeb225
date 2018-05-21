<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
	<div id="content">
		<form action="checksearch.php" method="post">
			<input class="search" type="checkbox" value="IDNV" name="timkiem[]" />Mã NV
			<input class="search" type="checkbox" value="Hoten" name="timkiem[]" />HọtênNV
			<input class="search" type="checkbox" value="Diachi" name="timkiem[]" />ĐịaChỉ
			<input type="text" name="keyword"/>
			<button name="submit" type="submit">Tìm kiếm</button>
		</form>
	</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>	