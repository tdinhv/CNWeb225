<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/header.php' ?>
<?php
    mysqli_set_charset($conn,'utf8');
    $rs = mysqli_query($conn,"SELECT * FROM categories");
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
                           <div class="panel-title ">Thêm tin tức</div>
                        </div>
                        <form action="xulythemtintuc.php" method="post" enctype = "multipart/form-data">
                            <div class="content-box-large box-with-header">
                                <div>
                                    <div class="row mb-10"></div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="name">Tên tin</label>
                                                <input type="text" name="lname" class="form-control" placeholder="Nhập tên tin">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Giá bán</label>
                                                <input name="gianban" type="text" class="form-control" placeholder="Nhập giá bán">
                                            </div>
                                            <div class="form-group">
                                                <label>Danh mục tin</label>
                                                <select name="danhmuc" class="form-control">
                                                    <?php while ($row=mysqli_fetch_array($rs)) { ?>
                                                        <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Diện tích</label>
                                                <input name="dientich" type="text" class="form-control" placeholder="Nhập diện tích">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Điạ chỉ</label>
                                                <input name="diachi" type="text" class="form-control" placeholder="Nhập địa chỉ">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Thêm hình ảnh</label>
                                                <input name="image" type="file" class="btn btn-default" id="exampleInputFile1">
                                                <p class="help-block"><em>Định dạng: jpg, png, jpeg,...</em></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"></div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Chi tiết</label>
                                                <textarea name="chitiet" class="form-control" rows="7"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Thêm</button>
                                            <button class="btn btn-success" type="reset">Nhập lại</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
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