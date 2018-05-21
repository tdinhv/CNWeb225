<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/header.php' ?>
<?php
    mysqli_set_charset($conn,'utf8');
    $rs = mysqli_query($conn,'SELECT * FROM categories');
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
                                <div class="panel-title ">Quản lý danh mục</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <?php if($rsRole->num_rows>0){  ?>
                            <div class="col-md-8">
                                <a href="addcat.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>
                                <button type="submit" class="btn btn-success">Xóa</button>
                            </div>
                            <?php } ?>
                            <div class="col-md-4">
                                <div class="input-group form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Search</button>
                           </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="panel-body">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <?php if($rsRole->num_rows>0){  ?>
                                            <th><input type="checkbox" id="select_all" ></th>
                                            <?php } ?>
                                            <th>ID</th>
                                            <th>Tên danh mục</th>
                                            <?php if($rsRole->num_rows>0){  ?>
                                            <th>Chức năng</th>
                                            <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($row=mysqli_fetch_array($rs)) { ?>
                                            <tr class="odd gradeX">
                                                <?php if($rsRole->num_rows>0){  ?>
                                                <td><input type="checkbox" name="check_list[]" value="<?= $row['cid']?>" class="checkbox"></td>
                                                <?php } ?>
                                                <td><?=$row['cid'];?></td>
                                                <td><?=$row['cname'];?></td>
                                                <?php if($rsRole->num_rows>0){  ?>
                                                <td class="center text-center">
                                                    <a href="editcat.php?cid=<?=$row['cid'];?>" title="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil "></span> Sửa</a>
                                                    <a href="xulyxoadanhmuc.php?cid=<?=$row['cid'];?>" title="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                                </td>
                                                <?php } ?>
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