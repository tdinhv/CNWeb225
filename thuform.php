<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/header.php' ?>
<?php
	mysqli_set_charset($conn,'utf8');
	$rs = mysqli_query($conn,"SELECT * FROM phongban");

?>
	<div class="content">
		<form>
	        <h1>Login</h1>
	 		<input placeholder="Username" type="text" required="">
	  		<input placeholder="Password" type="password" required="">
	  		<button>Submit</button>
		</form>
	</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/inc/footer.php' ?>	