<?php
$login = $this->session->userdata('login');
$name = $this->session->userdata('name');
$count = $this->session->userdata('count');
$money = $this->session->userdata('money');
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
                <a href="<?php echo base_url();?>home">
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
                        if(isset($name)){
                            ?>
                            <a href="<?php base_url();?>user">
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
                    <a href="<?php echo base_url();?>home">
                        <img src="<?php echo base_url();?>public/img/logo/logo.png" alt="annpio">
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
<!--    //form login register-->
<div id="login-box" class="login-box">
    <a class="close" href="#">X</a><br><br>
    <div class="login-f">
        <p class="title-login">Đăng nhập</p>
        <p>Đăng kí tài khoản để có thể nhận được dịch vụ chăm sóc khách hàng từ chúng tôi!</p>
        <?php
        $style = array(
            'class' => 'form-group'
        );
        echo form_open('home/login',$style);
        ?>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email ..." required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu ..." required>
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-info" value="Đăng nhập">
        </div>
        <?php echo form_close();?>
    </div>
    <div class="login-e">
        <p>Bạn chưa có tài khoản ?</p>
        <a href="#register-box" class="register-window">Đăng ký</a>
    </div>
</div>
<div id="register-box" class="login-box">
    <a class="close" href="#">X</a><br><br>
    <div class="login-f">
        <p class="title-login">Đăng kí</p>
        <p>Vui lòng điền đầy đủ thông tin bên dưới</p>
        <?php
        echo form_open('home/register',$style);
        ?>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Full Name ..." required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email ..." required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password ..." required>
        </div>
        <div class="form-group">
            <input type="submit" name="register" class="btn btn-info" value="Register">
            <a href="#login-box" class="relogin-window">Đăng nhập</a>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
<!--    //form login register-->
<div class="centerintro">
    <div class="row widthcenterintro">
        <div class="col-md-10">
            <span class="a">Giỏ hàng</span>
        </div>
        <div class="col-md-2">
            <a href="<?php echo base_url();?>home" class="a">Trang chủ</a>
        </div>
    </div>
</div>
<div class="row centerpro">
    <?php if(isset($money) && $money > 0){
        ?>
    <table class="table table-hover tb_product">
        <div class="text-center">
            <h2><b>Giỏ Hàng Của Bạn</b></h2>
        </div>
        <tr>
            <th>STT</th>
            <th>Ảnh Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Giá bán lẻ</th>
            <th>Thành tiền</th>
            <th><a href="<?php echo base_url()?>cart/delete_cart_all" title="Xóa tất cả giỏ hàng">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </th>
        </tr>
        <?php 
        echo form_open('cart/capnhap');
        $i = 1;
            foreach($cart as $row){
                echo form_hidden('cart[' . $row['id'] . '][id]', $row['id']);
                echo form_hidden('cart[' . $row['id'] . '][rowid]', $row['rowid']);
                echo form_hidden('cart[' . $row['id'] . '][name]', $row['name']);
                echo form_hidden('cart[' . $row['id'] . '][price]', $row['price']);
                echo form_hidden('cart[' . $row['id'] . '][qty]', $row['qty']); // truyen du lieu vao $POST['cart']
                    ?>
        <tr>
            <th><?php  echo $i++; ?></th>
            <th><img src="<?php echo base_url() ?>public/img/product/<?php echo $row['img'] ?>"
                     alt="<?php echo $row['name'] ?>"></th>
            <td><?php echo $row['name'] ?> - <?php echo $row['size'] ?></td>
            <td>
                <?php
                $data = array(
                    'type' => 'number',
                    'class' => 'form-control number',
                    'min' => '0',
                    'max' => $row['max'],
                    'name' => 'cart[' . $row['id'] . '][qty]',
                    'value' => $row['qty'],
                );
                echo form_input($data);
                ?>
            </td>
            <td><?php echo number_format($row['price']) ?> <sup>đ</sup></td>
            <td>
                <?php echo number_format($row['subtotal']) ?> <sup>đ</sup>
            </td>
            <td>
                <a href="<?php echo base_url()?>cart/delete_cart/<?php echo $row['rowid']?>" class="del" title="Delete">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
        <div class="text-right">
            <div class="tamtinh">
                <p>Tạm Tính:
                    <?php
                    if(isset($money)){
                        echo number_format($money) ;
                    }else{ echo '0';}
                    ?><sup>đ</sup></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="recart">
                <a href="<?php echo base_url()?>product">QUAY LẠI MUA HÀNG</a>
            </div>
        </div>
        <div class="text-right col-sm-6">
            <div>
                <input type="submit" name="capnhap" class="btn btn-danger" value="Cập Nhập">
                <?php echo form_close();?>
                <a href="<?php echo base_url()?>thanhtoan" class="btn btn-success">Thanh Toán</a>
            </div>
        </div>
    <?php }else{
    ?>
    <div class="row centerpro">

        <div class="text-center">
            <img src="<?php echo base_url()?>public/img/nocart.png" alt="matmeu"><br><br>
            <p>Giỏ hàng của bạn hiện đang trống.</p><br>
            <div class="prevcart">
                <a href="<?php echo base_url()?>product">QUAY LẠI MUA HÀNG</a>
            </div>
        </div>
    </div>
    <?php
    }?>
</div>
<div>
    <img src="<?php echo base_url();?>public/img/widebaner.jpg" alt="annpiogiamgia" width="100%">
</div>
<div class="row end">
    <div class="widthend">
        <div class="col-md-3">
            <div class="logo" style="width: 100%">
                <a href="<?php echo base_url();?>home">
                    <img src="<?php echo base_url(); ?>public/img/logo/logo.png" alt="annpio">
                    <h1 style="float: left">NNPIO <br> <span>Thế giới thời trang</span></h1>
                </a>
            </div>
            <p>Tự hào là điểm đến mua sắm online hàng đầu Việt Nam, AnnPio hứa hẹn đem đến những sản phẩm thời trang độc đáo và chất lượng theo xu hướng của thế giới, nhằm mang đến trải nghiệm mua sắm tuyệt vời cho các tín đồ thời trang.</p>
        </div>
        <div class="col-md-3">
            <h3>LIÊN HỆ</h3>
            <ul>
                <li><a href="<?php echo base_url();?>home">Trang chủ</a></li>
                <li><a href="<?php echo base_url();?>introduce">Giới thiệu</a></li>
                <li><a href="<?php echo base_url();?>product">Sản phẩm</a></li>
                <li><a href="<?php echo base_url();?>news">Tin tức</a></li>
                <li><a href="<?php echo base_url();?>contact">Liên hệ</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>ĐĂNG KÝ</h3>
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
            <h3>HỖ TRỢ</h3>
            <p>Nếu bạn có thắc mắc hãy liên hệ với chúng tôi theo các cách dưới đây</p>
            <p class="contactus">
                <span class="glyphicon glyphicon-record"></span>Tin kinh tế K57 - HUMG<br><br>
                <span class="glyphicon glyphicon-phone-alt"></span>097239404xx <br><br>
                <span class="glyphicon glyphicon-envelope"></span>support@gmail.com<br><br>
            </p>
        </div>
    </div>
</div>
<div class="footer">
    <div class="endfooter">
        <div class="col-md-9">
            <p>&copy; Bản quyền thuộc về <span>Lại Lan Anh - 1221050146</span></p>
        </div>
        <div class="col-md-2">
            <img src="<?php echo base_url(); ?>public/img/payment.png" alt="payment">
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
