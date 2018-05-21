<?php
include('substring.php');
include('connect.php');
$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
 mysqli_set_charset($conn,'utf8');
    $rs = mysqli_query($conn,"SELECT lid,lname,gia,description,c.cname,picture,area,address FROM lands as l INNER JOIN categories as c on l.cid = c.cid order by lid desc LIMIT $start_from, 5");

?>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
        <thead>
            <tr>
                <th><input type="checkbox" id="select_all" ></th>
                <th>ID</th>
                <th>Tên</th>
                <th>Giá bán</th>
                <th>Nội dung</th>
                <th>Danh mục</th>
                <th>Hình ảnh</th>
                <th>Diện tích</th>
                <th>Địa chỉ</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row=mysqli_fetch_array($rs)) { ?>
                <tr class="odd gradeX">
                    <td><input type="checkbox" name="check_list[]" value="<?= $row['lid']?>" class="checkbox">
                    <td><?=$row['lid'];?></td>
                    <td><?=$row['lname'];?></td>
                    <td><?=$row['gia'];?></td>
                    <td><?= subtext($row['description'],100)?></td>
                    <td class="center"><?=$row['cname'];?></td>
                    <td class="center text-center">
                        <img style="width: 150px;height: 150px;" src="../files/<?=$row['picture'];?>" />
                    </td>
                    <td><?=$row['area'];?> m2</td>
                    <td><?=$row['address'];?></td>
                    <td class="center text-center">
                        <a href="editnew.php?lid=<?=$row['lid'];?>" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
                        <a href="xulyxoatintuc.php?lid=<?=$row['lid'];?>" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>