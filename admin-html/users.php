<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/header.php' ?>
<?php
    mysqli_set_charset($conn,'utf8');
    $rs = mysqli_query($conn,'SELECT * FROM users');
     $rsRole = mysqli_query($conn,"SELECT * FROM users as u INNER JOIN `roles` as r ON u.role_id = r.role_id WHERE u.username= '$username' and r.name = 'Admin'");
?>
    <div class="page-content">
        <div class="row">
            <div class="col-md-2">
                <div class="sidebar content-box" style="display: block;">
                    <!-- Nav-bar -->
						<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/left-bar.php' ?>
                    <!-- /.nav-bar -->
                </div>
            </div>
            <div class="col-md-10">

                <div class="content-box-large">
                    <form action="xulyxoadanhmuc.php" method="post" accept-charset="utf-8">
                        <div class="row">
                            <div class="panel-heading">
                                <div class="panel-title ">Quản lý tài khoản</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <?php if($rsRole->num_rows>0){  ?>
                            <div class="col-md-8">
                                <a href="adduser.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>
                                <!-- <button type="submit" class="btn btn-success">Xóa</button> -->
                            </div>
                            <?php } ?>
                        </div>

                        <div class="row">
                            <div class="panel-body">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên tài khoản</th>
                                            <th>Họ và tên</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row=mysqli_fetch_array($rs)) { ?>
                                            <tr class="odd gradeX">
                                                <td><?=$row['id'];?></td>
                                                <td><?=$row['username'];?></td>
                                                <td><?=$row['fullname'];?></td>
                                                <td class="center text-center">
                                                    <?php if($username == $row['username']){ ?>
                                                    <a href="edituser.php?id=<?=$row['id'];?>" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
                                                    <?php } ?> 
                                                    <?php if($username == "admin" && $row['username'] != "admin"){ ?>
                                                    <a href="xulyxoataikhoan.php?id=<?=$row['id'];?>" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <!-- Pagination -->
                                <!-- <nav class="text-center" aria-label="...">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav> -->
                                <!-- /.pagination -->
                            </div>
                        </div>
                    </form>
                    <!-- /.row -->
                </div>
                <!-- /.content-box-large -->
            </div>
        </div>
    </div>
<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/footer.php' ?>