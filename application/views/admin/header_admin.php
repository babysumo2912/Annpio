<?php
if(!isset($count_hoadon)){
    $count_hoadon = 0;
}
if(!isset($count_mess)){
    $count_mess = 0;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/font-awesome.css">
    <link rel="icon" href="<?php echo base_url();?>public/img/logo/icon.png">
    <script src="<?php echo base_url();?>public/style/js/jquery-3.1.0.js"></script>
    <script src="<?php echo base_url();?>public/style/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/filejs.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/tinymce.min.js"></script>
<!--    <script>tinymce.init({ selector:'textarea' });</script>-->
<!--    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/init-tinymce.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body class = "bodyadmin">
<nav class="navbar navbar-default">
    <div class="hdadmin">
        <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a href="<?php echo base_url()?>admin" class = "navbar-brand">
      <i class = "fa fa-home fa-lg" title = "Home Page"></i>
<!--        --><?php
//          if (isset($admin)) {
//            foreach ($admin as $key) {
//              echo $key->name;
//            }
//          }
//         ?>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "fa fa-male"></i> Tài khoản<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url()?>quanlikhachhang">Khách Hàng</a></li>
            <li><a href="<?php echo base_url()?>admin_nhanvien">Nhân viên</a></li>
            <li><a href="#">Đối tác vận chuyển</a></li>
<!--            <li role="separator" class="divider"></li>-->
<!--            <li><a href="#">Separated link</a></li>-->
<!--            <li role="separator" class="divider"></li>-->
<!--            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class ="fa fa-cubes"></i> Kho <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url()?>admin/nhapkho">Nhập kho</a></li>
            <li><a href="#">Xuất kho</a></li>
            <li><a href="#">Tồn kho</a></li>
            <!--            <li role="separator" class="divider"></li>-->
            <!--            <li><a href="#">Separated link</a></li>-->
            <!--            <li role="separator" class="divider"></li>-->
            <!--            <li><a href="#">One more separated link</a></li>-->
          </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "fa fa-money"></i> Doanh thu <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo base_url()?>hoadon">Hóa đơn <span class="badge"><?php echo $count_hoadon?></span></a></li>
                <li><a href="#">Thống kê</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "fa fa-cube"></i> Sản phẩm <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Danh mục sản phẩm</a></li>
            <li><a href="<?php echo base_url()?>Adminproduct">Chi tiết sản phẩm</a></li>
          </ul>
        </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "fa fa-newspaper-o"></i> Tin tức<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url()?>admin_tintuc">Bài viết mới </a></li>
                  <li><a href="#">Danh sách bài viết</a></li>
              </ul>
          </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class = "fa fa-comments-o"><sup><?php echo $count_mess?></sup></i></a></li>
          <li><a href="<?php echo base_url()?>hoadon"><i class = "fa fa-globe"><sup><?php echo $count_hoadon?></sup></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class = "fa fa-user-secret"></i>
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Thiết lập tài khoản</a></li>
            <li><a href="<?php echo base_url()?>admin/logout">Đăng xuất</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
    </div>
</nav>

