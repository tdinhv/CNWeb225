<?php require_once $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/inc/header.php' ?>
<?php
    mysqli_set_charset($conn,'utf8');
    $cid = $_REQUEST['cid'];
    if($cid == ''){
        header("Location: cat.php");
    }else{
        $rs = mysqli_query($conn,"SELECT * FROM categories where cid='$cid'");
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
            <?php
                $row=mysqli_fetch_array($rs)
            ?>
                <div class="row">
                    <div class="col-md-12 panel-info">
                        <div class="content-box-header panel-heading">
                            <div class="panel-title ">Thêm danh mục</div>
                        </div>
                        <div class="content-box-large box-with-header">
                            <div>
                                <form action="xulysuadanhmuc.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="hidden" name="cid" value="<?=$row['cid'];?>">    
                                                <label for="name">Tên danh mục</label>
                                                <input name="tendanhmuc" type="text" value="<?=$row['cname'];?>" class="form-control" placeholder="Nhập tên danh mục">
                                            </div>
                                        </div>
                                    </div>
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