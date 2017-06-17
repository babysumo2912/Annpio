<?php
$login = $this->session->userdata('login');
$name = $this->session->userdata('name');
$count = $this->session->userdata('count');
if(isset($view_single) && isset($view_single_order)){
    foreach ($view_single as $item){}
    $count_hd = 0;
    $money = 0;
    foreach ($view_single_order as $row){
        $count_hd += $row->qty;
        $money += $row->subtotal;
    }
}
?>
<html>
<head>
    <title>AnnPio - Thế giới thời trang</title>
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
                <a href="<?php echo base_url()?>home">
                    <img src="<?php echo base_url();?>public/img/logo/logo.png" alt="annpio">
                    <h1>NNPIO <br> <span>Thế giới thời trang</span></h1>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <div class="navbar-right">
                <div class="menufix">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>home">Trang chủ</a></li>
                        <li><a href="<?php echo base_url();?>introduce">Giới thiệu</a></li>
                        <li><a href="<?php echo base_url();?>product">Sản phẩm</a></li>
                        <li><a href="<?php echo base_url();?>news">Tin tức</a></li>
                        <li><a href="<?php echo base_url();?>contact">Liên hệ</a></li>
                        <li>
                            <a href="<?php echo base_url()?>cart">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <sup><?php echo $count?></sup>
                            </a>
                        </li>
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
                                    Đăng nhập
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
                <a href="<?php echo base_url()?>home">
                    <img src="<?php echo base_url(); ?>public/img/logo/logo.png" alt="annpio">
                    <h1>NNPIO <br> <span>Thế giới thời trang</span></h1>
                </a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="navbar-right">
                <div class="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>home">Trang chủ</a></li>
                        <li><a href="<?php echo base_url();?>introduce">Giới thiệu</a></li>
                        <li><a href="<?php echo base_url();?>product">Sản phẩm</a></li>
                        <li><a href="<?php echo base_url();?>news">Tin tức</a></li>
                        <li><a href="<?php echo base_url();?>contact">Liên hệ</a></li>
                        <li>
                            <a href="<?php echo base_url()?>cart">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                <sup><?php echo $count?></sup>
                            </a>
                        </li>
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
                                    Đăng nhập
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
    <div class="row widthcenterintro">
        <div class="col-md-10">
            <a href="<?php echo base_url() ?>user/logout" class="a">Đăng xuất</a>
        </div>
        <div class="col-md-2">
            <a href="<?php echo base_url();?>home" class="a">Trang Chủ</a>
        </div>
    </div>
</div>
<div class="row centerpro">
    <div class="col-md-3">
        <div class="account">
            <p class="title-acc">Thông</p>
            <div class="account-content">
                <?php
                if(isset($user)){
                    foreach($user as $item){
                        ?>
                        <p>Xin chào <b><?php echo $item->name; ?></b></p>
                        <p>Số điện thoại: <?php echo $item->phone?></p>
                        <p>Email: <?php echo $item->email?></p>
                        <p>Địa chỉ: <?php echo $item->address?></p>
                        <?php
                    }
                }
                ?>
                <form method="post">
                    <input type="submit" value="Edit Account" name="edit_acc" class="btn btn-info">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-9" id="content">
        <?php
        if (isset($view_single_order) && isset($view_single)){
        foreach ($view_single as $item) {
        };
        ?>
        <div class="col-md-5 table-bordered">
            <div class="col-md-12 text-center">
                <br>
                <b>Thông Tin Người Nhận</b>
                <br><br>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <td>Tên Khách Hàng</td>
                        <td><?php echo $item->name ?></td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại</td>
                        <td><?php echo $item->phone ?></td>
                    </tr>
                    <tr>
                        <td>Địa Chỉ</td>
                        <td><?php echo $item->address ?></td>
                    </tr>
                    <tr>
                        <td>Thành phố</td>
                        <td><?php echo $item->city ?></td>
                    </tr>
                    <tr>
                        <td>Ghi Chú</td>
                        <td><?php echo $item->ghichu ?></td>
                    </tr>
                    <tr>
                        <th>Hình Thức Thanh Toán</th>
                        <td>Thanh Toán Khi Giao Hàng COD</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-7">
            <div class="well">
                <fieldset>
                    <legend>Đơn Hàng (#<?php echo $item->id ?>) (<?php echo $count_hd ?><sup>sp</sup>)</legend>
                    <legend>
                        <table class="table table-hover tb_product_tt">
                            <?php
                            if (isset($view_single_order)) {
                                foreach ($view_single_order as $row) {
                                    ?>

                                    <tr>
                                        <td>
                                            <img
                                                src="<?php echo base_url() ?>public/img/product/<?php echo $row->img ?>"
                                                alt="">
                                            <sup class="badge"><?php echo $row->qty ?></sup>
                                        </td>
                                        <td>
                                            <?php echo $row->name ?>
                                        </td>
                                        <td class="text-right">
                                            <?php echo number_format($row->subtotal) ?>
                                            <sup>đ</sup>
                                        </td>
                                    </tr>

                                    <?php
                                }
                            }
                            ?>
                            <tr>
                                <td colspan="2">Tạm Tính</td>
                                <td class="text-right"><?php echo number_format($money) ?> <sup>đ</sup></td>
                            </tr>
                            <tr>
                                <td colspan="2">Phí Vận Chuyển</td>
                                <td class="text-right">40.000 <sup>đ</sup></td>
                            </tr>
                        </table>
                    </legend>
                    <legend>
                        <p class="text-right">
                            Tổng Cộng: <?php echo number_format($money + 40000) ?><sup>đ</sup>
                        </p>
                    </legend>
                </fieldset>
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo base_url() ?>user" class="btn btn-success">
                <span class="glyphicon glyphicon-arrow-left"></span> &nbsp;
                Quay lại trang cá nhân
            </a>
        </div>
    </div>
    <?php
    }
    ?>
        <?php
        if(isset($order) && $order == 0){
            ?>
            <div class="text-center">
                <img src="<?php echo base_url()?>public/img/nocart.png" alt="matmeu"><br><br>
                <p>Bạn chưa có đơn hàng nào!</p><br>
                <div class="prevcart">
                    <a href="<?php echo base_url()?>product">QUAY LẠI MUA HÀNG</a>
                </div>
            </div>
        <?php
        }
        if(isset($order) && $order!=0){
            ?>
            <table class="table table-hover">
                <tr>
                    <th>Mã Đơn Hàng</th>
                    <th>Ngày tạo</th>
                    <th>Tình trạng</th>
                    <th>Giá trị</th>
                    <th>&nbsp;</th>
                </tr>
                <?php
                foreach ($order as $item){
                ?>
                <tr>
                    <td>#<?php echo($item->id)?></td>
                    <td><?php echo $item->date?></td>
                    <td>
                        <?php
                        if($item->active == 1){
                            echo '<b>'."Hàng đang được giao".'<b>';
                        }
                        if($item->active == 0){
                            echo "Chưa giao hàng";
                        }
                        ?>
                    </td>
                    <td class="text-right"><?php echo number_format($item->money + $item->ship)?></td>
                    <td>
                        <a href="<?php echo base_url()?>user/view/<?php echo $item->id?>" class="btn btn-success form-control" title="Xem chi tiết">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        <?php
        }
        ?>
    </div>
</div>
<div>
    <img src="<?php echo base_url();?>public/img/widebaner.jpg" alt="annpiogiamgia" width="100%">
</div>
<div class="row end">
    <div class="widthend">
        <div class="col-md-3">
            <div class="logo" style="width: 100%">
                <a href="<?php echo base_url();?>home">
                    <img src="<?php echo base_url();?>public/img/logo/logo.png" alt="annpio">
                    <h1 style="float: left">NNPIO <br> <span>Thế giới thời trang</span></h1>
                </a>
            </div>
            <p>Tự hào là điểm đến mua sắm online hàng đầu Việt Nam, AnnPio hứa hẹn đem đến những sản phẩm thời trang độc đáo và chất lượng theo xu hướng của thế giới, nhằm mang đến trải nghiệm mua sắm tuyệt vời cho các tín đồ thời trang.</p>
        </div>
        <div class="col-md-3">
            <h3>LIÊN KẾT</h3>
            <ul>
                <li><a href="<?php echo base_url();?>home">Trang chủ</a></li>
                <li><a href="<?php echo base_url();?>introduce">Giới thiệu</a></li>
                <li><a href="<?php echo base_url();?>product">Sản phẩm</a></li>
                <li><a href="<?php echo base_url();?>news">Tin tức</a></li>
                <li><a href="<?php echo base_url();?>contact">Liên hệ</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>ĐĂNG KÍ </h3>
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
            <h3>LIÊN HỆ</h3>
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
            <p>&copy; Bản quyền thuộc về <span>Lại Thị Lan Anh</span></p>
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