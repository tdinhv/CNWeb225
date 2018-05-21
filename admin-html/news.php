<?php
    session_start();
    include $_SERVER['DOCUMENT_ROOT'].'/CNWebNhaDat/admin-html/checkLogin.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>HDLANDS</title>
    <link rel="shortcut icon" type="image/ico" href="images/icon-180x180.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  </head>
  <body>
    <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <h1><a href="index.php">HDLANDS-Admin</a></h1>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12"></div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['login_user'] ?><b class="caret"></b></a>
                            <ul class="dropdown-menu animated fadeInUp">
                              <li><a href="profile.php">Profile</a></li>
                              <li><a href="login.php">Logout</a></li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
    </div>
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
                    <form action="xulyxoatintuc.php" method="post" accept-charset="utf-8">
                    <div class="row">
                        <div class="panel-heading">
                            <div class="panel-title ">Quản lý tin tức</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <a href="addnews.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Thêm</a>
                            <button type="submit" class="btn btn-success">Xóa</button>
                        </div>
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
<div id="target-content" >loading...</div>
<?php
    include('connect.php'); 
    $limit = 5;
    mysqli_set_charset($conn,'utf8');
        $rs = mysqli_query($conn,'SELECT * FROM lands');
        $total_records = $rs->num_rows; 
        $total_pages = ceil($total_records / $limit); 
?>    
<div align="center">
<ul class='pagination text-center' id="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
            if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
            <?php else:?>
            <li id="<?php echo $i;?>"><a href='pagination.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
        <?php endif;?>          
<?php endfor;endif;?>  
</div>
</div>
</body>
<footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2018 &copy; <a href='#'>HD Lands</a>
            </div>
            
         </div>
</footer>
<script>
jQuery(document).ready(function() {
jQuery("#target-content").load("pagination.php?page=1");
    jQuery("#pagination li").live('click',function(e){
    e.preventDefault();
        jQuery("#target-content").html('loading...');
        jQuery("#pagination li").removeClass('active');
        jQuery(this).addClass('active');
        var pageNum = this.id;
        jQuery("#target-content").load("pagination.php?page=" + pageNum);
    });
    });
</script>