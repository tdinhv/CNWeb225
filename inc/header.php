<?php include $_SERVER['DOCUMENT_ROOT'].'/CNweb-test/nhansu/connect.php'; 
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Chương trình quản lý</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="../css/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
		<script src="/CNweb-test/nhansu/js/jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="tieude">
					<h1 style="text-align: center;">CHƯƠNG TRÌNH QUẢN LÝ PHÒNG BAN</h1>
					<div id="user_name">
						<p class="user_profile">Xin chào <span><?php echo $_SESSION['login_user']; ?></span></p>
						<p class="user_profile"><a href="index.php"><i class="fa fa-sign-out-alt"></i></a></p>	
					</div>
					
				</div>
			</header>
			<div id="wrapper-content">
				<div id="left-bar">
					
					<p><a href="/CNweb-test/nhansu/xemttnv.php">Trang chủ</a></p>
					<p><a href="/CNweb-test/nhansu/xemttnv.php">Xem nhân viên</a></p>
					<p><a href="/CNweb-test/nhansu/xemttin.php">Xem phòng ban</a></p>
					<p><a href="/CNweb-test/nhansu/timkiem.php">Tìm kiếm</a></p>
				</div>