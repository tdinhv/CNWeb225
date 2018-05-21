<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/header.php' ?>
<?php
    mysqli_set_charset($conn,'utf8');
    $rs = mysqli_query($conn,"SELECT * FROM roles");
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

                <div class="row">
                    <div class="col-md-12 panel-info">
                        <div class="content-box-header panel-heading">
                            <div class="panel-title ">Thêm tài khoản</div>
                        </div>
                        <div class="content-box-large box-with-header">
                            <div>
                                <form action="xulythemtaikhoan.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">Tên tài khoản</label>
                                                <input name="username" required type="text" class="form-control" placeholder="Nhập tên tài khoản">
                                                 <?php if(isset($_GET['err_user'])!=null){ ?>
                                                <label style="color: red;font-weight: bold;" for="name"><?=$_GET['err_user']?></label>
                                                <?php } ?>
                                                <br/>
                                                <label for="name">Cấp bậc</label>
                                                <select name="role" class="form-control">
                                                    <?php while ($row=mysqli_fetch_array($rs)) {
                                                        if($row['name']!="ADMIN"){ ?>
                                                        <option value="<?=$row['role_id'] ?>"><?php echo $row['name'] ?></option>
                                                    <?php }} ?>
                                                </select>
                                                <label for="name">Họ và tên</label>
                                                <input name="fullname" required type="text" class="form-control" placeholder="Nhập họ và tên">
                                                <label for="name">Mật khẩu</label>
                                                <input name="password" required type="password" class="form-control" placeholder="Nhập mật khẩu">
                                                <label for="name">Xác nhận mật khẩu</label>
                                                <input name="conpassword" required type="password" class="form-control" placeholder="Nhập lại mật khẩu">
                                                <?php if(isset($_GET['err_pass'])!=null){ ?>
                                                <label style="color: red;font-weight: bold;" for="name"><?=$_GET['err_pass']?></label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Thêm</button>
                                            <button class="btn btn-success" type="reset">Nhập lại</button>
                                        </div>    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row col-size -->

            </div>
            <!-- /.col-md-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- Page content -->

    <!-- footer -->
   <?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/footer.php' ?>