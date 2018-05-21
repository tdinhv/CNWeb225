<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
	<div id="content">
		<form action="xulythemphongban.php" method="post">
	        <h1>Thêm phòng ban</h1>
	 		<input placeholder="Tên phòng ban" name="tenphongban" type="text" required="">
	  		<div style="margin-top: 10px;">
				<button type="submit">Thêm</button>
			</div>
		</form>
	</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>	
