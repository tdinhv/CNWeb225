<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/header.php' ?>
<?php
    mysqli_set_charset($conn,'utf8');
    $rs = mysqli_query($conn,"SELECT * FROM categories");
    $id = $_REQUEST['lid'];
    if($id == ''){
        header("Location: news.php");
    }else{
        $rsnew = mysqli_query($conn,"SELECT * FROM lands where lid='$id'");
    }
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
                           <div class="panel-title ">Sửa tin tức</div>
                        </div>
                        <div class="content-box-large box-with-header">
                            <div>
                                <div class="row mb-10"></div>
                                <form action="xulysuatintuc.php" method="post" accept-charset="utf-8" enctype = "multipart/form-data">
                                    <div class="row">
                                        <?php while ($rownew=mysqli_fetch_array($rsnew)) { ?>
                                            <div class="col-sm-6">
                                                <input type="hidden" name="lid" value="<?=$rownew['lid'];?>" class="form-control">
                                                <div class="form-group">
                                                    <label for="name">Tên tin</label>
                                                    <input type="text" name="lname" value="<?=$rownew['lname'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Giá bán</label>
                                                    <input name="giaban" type="text" value="<?=$rownew['gia'];?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Danh mục tin</label>
                                                    <select name="danhmuc" class="form-control">
                                                        <?php while ($row=mysqli_fetch_array($rs)) { 
                                                            if($rownew['cid'] == $row['cid'] ){
                                                            ?>
                                                            <option selected="selected" value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
                                                            <?php }else{ ?>
                                                            <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
                                                        <?php }} ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Diện tích</label>
                                                    <input name="dientich" value="<?=$rownew['area'];?>" type="text" class="form-control" placeholder="Nhập diện tích">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="name">Địa chỉ</label>
                                                    <input name="diachi" value="<?=$rownew['address'];?>" type="text" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Hình ảnh</label>
                                                    <input name="hinhanh" value="<?=$rownew['picture'];?>" type="hidden" class="form-control">
                                                    <input name="image" type="file" class="btn btn-default" id="exampleInputFile1">
                                                    <img  src="../files/<?=$rownew['picture'];?>" style="width: 100px;height: 100px;" alt="<?=$rownew['picture'];?>">
                                                    <p class="help-block"><em>Định dạng: jpg, png, jpeg,...</em></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label>Chi tiết</label>
                                                    <textarea name="chitiet" class="form-control" rows="7"><?=$rownew['description'];?></textarea>
                                                </div>
                                            </div>
                                        <?php }?>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Sửa</button>
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