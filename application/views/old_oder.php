<?php
$name = $this->session->userdata('name');
if(!isset($count_hoadon)){
    $count_hoadon = 0;
}
if(!isset($count_mess)){
    $count_mess = 0;
}
if(isset($view_single) && isset($view_single_order)){
    foreach ($view_single as $item){}
    $count = 0;
    $money = 0;
    foreach ($view_single_order as $row){
        $count += $row->qty;
        $money += $row->subtotal;
    }
}
?>
<html>
<head>
    <title>AnnPio - Thế giới giày nữ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/style.css">
    <link rel="icon" href="<?php echo base_url();?>public/img/logo/icon.png">
    <script src="<?php echo base_url();?>public/style/js/jquery-3.1.0.js"></script>
    <script src="<?php echo base_url();?>public/style/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/filejs.js"></script>
</head>
<body>
<div class="fixNav">
    <div class="first">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed micon" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo">
                <a href="home.php">
                    <img src="<?php echo base_url();?>public/img/logo/logo.png" alt="annpio">
                    <h1>NNPIO <br> <span>Thế giới giày nữ</span></h1>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <div class="navbar-right">
                <div class="menufix">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>home">HOME</a></li>
                        <li><a href="<?php echo base_url();?>oder">ODERS <sup><?php echo $count_hoadon?></sup></a></li>
                        <li><a href="<?php echo base_url();?>adminproduct">PRODUCT</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url();?>message">MESSAGES <sup><?php echo $count_mess?></sup></a></li>
                    </ul>
                </div>
                <div class="menurightfix">
                    <ul class="nav navbar-nav">
                        <li>
                            <?php
                            if(isset($name)){ ?>
                                <a href="<?php echo base_url()?>user">
                                    <span class="glyphicon glyphicon-user"></span>
                                    &nbsp;
                                    <?php
                                    echo $name;
                                    ?>
                                </a>
                                <?php
                            }else {
                                ?>
                                <a href="#login-box" class="login-window">
                                    <span class="glyphicon glyphicon-user"></span>
                                    &nbsp;
                                    Login
                                </a>
                                <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bgheader">
    <div class="first">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed micon" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url(); ?>public/img/logo/logo.png" alt="annpio">
                    <h1>NNPIO <br> <span>Thế giới giày nữ</span></h1>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-right">
                <div class="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>home">HOME</a></li>
                        <li class="actived"><a href="<?php echo base_url();?>oder">ODERS <sup class="badge"><?php echo $count_hoadon ?></sup></a></li>
                        <li><a href="<?php echo base_url();?>adminproduct">PRODUCT</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url();?>message">MESSAGES <sup class="badge"><?php echo $count_mess?></sup></a></li>
                    </ul>
                </div>
                <div class="menuright">
                    <ul class="nav navbar-nav">
                        <li>
                            <?php
                            if(isset($name)){ ?>
                                <a href="<?php echo base_url()?>user">
                                    <span class="glyphicon glyphicon-user"></span>
                                    &nbsp;
                                    <?php
                                    echo $name;
                                    ?>
                                </a>
                                <?php
                            }else {
                                ?>
                                <a href="#login-box" class="login-window">
                                    <span class="glyphicon glyphicon-user"></span>
                                    &nbsp;
                                    Login
                                </a>
                                <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="centerintro">
    <div class="row widthcenterintro text-center">
        <h1>Bạn có <a href="<?php echo base_url()?>oder"><?php echo $count_hoadon?></a> hóa đơn mới</h1>
    </div>
</div>
<div class="row centerpro">
    <?php
    if(isset($view_single_order) && isset($view_single)){
    foreach ($view_single as $item){};
    ?>
    <div class="col-md-7 table-bordered">
        <div class="col-md-12 text-center">
            <br>
            <b>Thông Tin Người Nhận</b>
            <br><br>
        </div>
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <td>Tên Khách Hàng</td>
                    <td><?php echo $item->name?></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại</td>
                    <td><?php echo $item->phone?></td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td><?php echo $item->address?></td>
                </tr>
                <tr>
                    <td>Thành phố</td>
                    <td><?php echo $item->city?></td>
                </tr>
                <tr>
                    <td>Ghi Chú</td>
                    <td><?php echo $item->ghichu?></td>
                </tr>
                <tr>
                    <th>Hình Thức Thanh Toán</th>
                    <td>Thanh Toán Khi Giao Hàng COD</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-5">
        <div class="well">
            <fieldset>
                <legend>Đơn Hàng (#<?php echo $item->id?>) (<?php echo $count?><sup>sp</sup>)</legend>
                <legend>
                    <table class="table table-hover tb_product_tt">
                        <?php
                        if(isset($view_single_order)){
                            foreach ($view_single_order as $row){
                                ?>

                                <tr>
                                    <td>
                                        <img src="<?php echo base_url()?>public/img/product/<?php echo $row->img?>" alt="">
                                        <sup class="badge"><?php echo $row->qty?></sup>
                                    </td>
                                    <td>
                                        <?php echo $row->name?>
                                    </td>
                                    <td  class="text-right">
                                        <?php echo number_format($row->subtotal)?>
                                        <sup>đ</sup>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                        <tr>
                            <td colspan="2">Tạm Tính</td>
                            <td class="text-right"><?php echo number_format($money)?> <sup>đ</sup></td>
                        </tr>
                        <tr>
                            <td colspan="2">Phí Vận Chuyển</td>
                            <td class="text-right">40.000 <sup>đ</sup></td>
                        </tr>
                    </table>
                </legend>
                <legend>
                    <p class="text-right">
                        Tổng Cộng: <?php echo number_format($money+40000)?><sup>đ</sup>
                    </p>
                </legend>
            </fieldset>
        </div>
    </div>
    <div class="text-center">
        <a href="<?php echo base_url()?>old_oder" class="btn btn-success">
            <span class="glyphicon glyphicon-send"></span> &nbsp;
            Quay lại
        </a>
    </div>
</div>
<?php
}
if(isset($oder)) {
?>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Ngày mua</th>
        <th>Tên Khách Hàng</th>
        <th>Số Điện Thoại</th>
        <th>Thanh Toán</th>
        <th>Ghi Chú</th>
        <th><a href="<?php echo base_url()?>oder" class="btn btn-info form-control">Hóa đơn mới</a></th>
    </tr>
    <?php
    foreach ($oder as $item) {
        ?>
        <tr>
            <td><?php echo $item->id ?></td>
            <td><?php echo $item->date ?></td>
            <td><?php echo $item->name ?></td>
            <td><?php echo $item->phone ?></td>
            <td class="text-right"><?php echo number_format($item->money) ?><sup>đ</sup></td>
            <td><?php echo $item->ghichu ?></td>
            <td>
                <a href="<?php echo base_url() ?>old_oder/view_chitiet/<?php echo $item->id ?>"
                   class="btn btn-primary edit" title="Xem chi tiết">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
                <a href="<?php echo base_url()?>old_oder/delete/<?php echo $item->id ?>" class="btn btn-danger delete" title="Hủy hóa đơn">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </td>
        </tr>
        <?php
    }
    }
    ?>
</table>
<div class="col-sm-12 text-center">
    <ul class="pagination">
        <?php
        if(isset($fullpage)) {
            for ($page = 1; $page <= $fullpage; $page++) {
                ?>
                <li>
                    <a href="<?php echo base_url()?>old_oder/page/<?php echo $page?>"><?php echo $page ?></a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
</div>
</div>
<div>
    <img src="<?php echo base_url();?>public/img/widebaner.jpg" alt="annpiogiamgia" width="100%">
</div>
<div class="row end">
    <div class="widthend">
        <div class="col-md-3">
            <div class="logo" style="width: 100%">
                <a href="<?php echo base_url();?>index.php">
                    <img src="<?php echo base_url();?>public/img/logo/logo.png" alt="annpio">
                    <h1 style="float: left">NNPIO <br> <span>Thế giới giày nữ</span></h1>
                </a>
            </div>
            <p>Tự hào là điểm đến mua sắm online hàng đầu Việt Nam, AnnPio hứa hẹn đem đến những sản phẩm thời trang độc đáo và chất lượng theo xu hướng của thế giới, nhằm mang đến trải nghiệm mua sắm tuyệt vời cho các tín đồ thời trang.</p>
        </div>
        <div class="col-md-3">
            <h3>LINKS</h3>
            <ul>
                <li><a href="<?php echo base_url();?>home">Home</a></li>
                <li><a href="<?php echo base_url();?>introduce">Introduce</a></li>
                <li><a href="<?php echo base_url();?>product">Product</a></li>
                <li><a href="<?php echo base_url();?>news">News</a></li>
                <li><a href="<?php echo base_url();?>contact">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>SIGN UP FOR</h3>
            <p>Đăng kí nhận những thông tin khuyến mãi từ cửa hàng của chúng tôi</p>
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="..." placeholder="Email của bạn...">
                    <span class="input-group-addon btn btn-info">
                        <a href="#"><span class="glyphicon glyphicon-send"></span></a>
                    </span>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <h3>CONTACT US</h3>
            <p>Nếu bạn có thắc mắc hãy liên hệ với chúng tôi theo các cách dưới đây</p>
            <p class="contactus">
                <span class="glyphicon glyphicon-record"></span>Tin kinh tế K57 - HUMG<br><br>
                <span class="glyphicon glyphicon-phone-alt"></span>0165456527x <br><br>
                <span class="glyphicon glyphicon-envelope"></span>support@gmail.com<br><br>
            </p>
        </div>
    </div>
</div>
<div class="footer">
    <div class="endfooter">
        <div class="col-md-9">
            <p>&copy; Bản quyền thuộc về <span>Đức Ann</span></p>
        </div>
        <div class="col-md-2">
            <img src="<?php echo base_url();?>public/img/payment.png" alt="payment">
        </div>
    </div>
</div>
<!--tao nut back to top-->
<div class="fix-footer">
    <a href="javarscript:void(0);" title="Top" style="display: inline" class="btn-top">
        <span class="glyphicon glyphicon-arrow-up"></span>
    </a>
</div>
<!--end_tao nut back to top-->
</body>
</html>