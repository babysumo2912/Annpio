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
                <a href="<?php echo base_url()?>home">
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
                        <li><a href="<?php echo base_url();?>introduce">INTRODUCE</a></li>
                        <li><a href="<?php echo base_url();?>product">PRODUCT</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url();?>contact">CONTACT</a></li>
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
                <a href="<?php echo base_url()?>home">
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
                        <li><a href="<?php echo base_url();?>introduce">INTRODUCE</a></li>
                        <li><a href="<?php echo base_url();?>product">PRODUCT</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url();?>contact">CONTACT</a></li>
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
<!--    //form login register-->
<div id="login-box" class="login-box">
    <a class="close" href="#">X</a><br><br>
    <div class="login-f">
        <p class="title-login">Login</p>
        <p>Register an account now to receive incentives from us.</p>
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
            <input type="password" class="form-control" name="password" placeholder="Password ..." required>
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-info" value="Login">
        </div>
        <?php echo form_close();?>
    </div>
    <div class="login-e">
        <p>Do not have an account ?</p>
        <a href="#register-box" class="register-window">Register</a>
    </div>
</div>
<div id="register-box" class="login-box">
    <a class="close" href="#">X</a><br><br>
    <div class="login-f">
        <p class="title-login">Register</p>
        <p>Please fill out the information below</p>
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
            <a href="#login-box" class="relogin-window">Back Login</a>
        </div>
        <?php
        echo form_close();
        ?>
        ?>
    </div>
</div>
<!--    //form login register-->
<div class="centerintro">
    <div class="row widthcenterintro">
        <div class="col-md-10">
            <span class="a">INVOICE</span>
        </div>
        <div class="col-md-2">
            <a href="<?php echo base_url();?>home" class="a">Home</a>
            /
            <span>invoice</span>
        </div>
    </div>
</div>
<div class="row centerpro">
    <?php
    $style = array(
        'class' => "form-group"
    );
    echo form_open('thanhtoan/save_order',$style);
    ?>
    <div class="col-md-8 form-group">
        <div class="col-md-7">
            <div class="well">
                <fieldset>
                    <legend>Đơn Hàng (<?php echo $count?>)</legend>
                    <legend>
                        <table class="table table-hover tb_product_tt">
                            <?php
                            if(isset($cart)){
                                foreach ($cart as $item){
                                    ?>

                                    <tr>
                                        <td>
                                            <img src="<?php echo base_url()?>public/img/product/<?php echo $item['img']?>" alt="">
                                            <sup class="badge"><?php echo $item['qty']?></sup>
                                        </td>
                                        <td>
                                            <?php echo $item['name']?>
                                        </td>
                                        <td  class="text-right">
                                            <?php echo number_format($item['subtotal'])?>
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
        <div class="col-md-5 form-group">
            <label for="">Vận chuyển</label>
            <select name="" id="" class="form-control">
                <option value="40000" class="">Giao hàng tận nơi - 40.000<sup>đ</sup></option>
            </select>
            <br><br><br>
            <p>Thanh Toán</p>
            <p>
                <span class="glyphicon glyphicon-ok-circle" style="color: red;"></span>
                <b>Thanh toán khi giao hàng (COD)</b>
            </p>
        </div>
    </div>
    <div class="form-group col-md-4">
        <fieldset>
            <legend>Thông Tin Khách Hàng</legend>
            <div class="form-group">
                <?php if(isset($login)){
                ?>
                <input type="email" name="email" value="<?php echo $login?>" class="form-control" readonly>
                <?php
                }else{?>
                <input type="email" name="email" class="form-control" placeholder="Email ..." required>
                <?php }?>
            </div>
            <div class="form-group">
                <a href="">Thông tin thanh toán và nhận hàng</a>
            </div>
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Họ Tên ..." required>
            </div>
            <div class="form-group">
                <input type="tel" pattern="([0]{1})([0-9]{9,})" name="phonenumber" class="form-control" placeholder="Số Điện Thoại ..." required>
            </div>
            <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Địa Chỉ ..." required>
            </div>
            <div class="form-group">
                <select name="city" id="" class="form-control" required>
                    <option value="">---Chọn Tỉnh Thành---</option>
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="TP. Hồ Chí Minh">TP Hồ Chí Minh</option>
                    <option value="Nam Định">Nam Định</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Nha Trang">Nha Trang</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="ghichu" rows="5" class="form-control" placeholder="Ghi chú ...."></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="ĐẶT HÀNG" class="form-control btn btn-primary">
            </div>
        </fieldset>
    </div>
    <?php echo form_close();?>
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