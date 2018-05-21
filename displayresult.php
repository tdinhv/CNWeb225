<?php
include_once('connect.php');

$rs = mysqli_query($conn,'SELECT * FROM nhanvien');


echo '<table border="1" width="100%">';
echo '<caption>Dữ liệu bảng Nhân sự</caption>';

echo '<tr><th>Mã Số</th><th>Họ tên</th><th>Mã phòng ban</th><th>Địa chỉ</th></tr>';
while ($row=mysqli_fetch_array($rs)) {
    echo '<tr>
		    <th>'.$row['id_nv'].'</th>
		    <th>'.$row['fullname'].'</th>
		    <th>'.$row['id_phongban'].'</th>
		    <th>'.$row['diachi'].'</th>
    	</tr>';
}