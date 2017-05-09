<?php
$login = $this->session->userdata('login');
$name = $this->session->userdata('name');
$count = $this->session->userdata('count');
?>
<html>
<head>
    <title>AnnPio - Contact</title>
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
                <a href="<?php echo base_url();?>home">
                    <img src="<?php echo base_url();?>public/img/logo/logo.png" alt="annpio">
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
                        <li class="actived"><a href="<?php echo base_url();?>contact">CONTACT</a></li>
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
<!--//form login register-->
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
<!--//form login register-->
<div class="centerintro">
    <div class="row widthcenterintro">
        <div class="col-md-10">
            <span class="a">CONTACT</span>
        </div>
        <div class="col-md-2">
            <a href="<?php echo base_url();?>home" class="a">Home</a>
            /
            <span>Contact</span>
        </div>
    </div>
</div>
<div class=" row centercontact">
    <div class="col-md-8 contentcontact">
        <p class="contactus">CONTACT US</p><br>
        <span>_____</span>
        <p class="titlep">
            Chúng tôi luôn nhận mọi thông tin phản hồi từ quý khách hàng và sẽ sớm trả lời bạn trong thời gian sớm nhất về những ý kiến đó. Xin hãy điền đầy đủ mọi thông tin dưới đây để chúng tôi có thể giúp đỡ bạn.
        </p>
        <?php
        $style = array(
            'class' => 'form-group formcontact',
        );
        echo form_open('contact/send',$style);
        ?>
        <?php
        if(isset($thongbao)){
            ?>
            <div class="alert alert-success" role="alert"><?php echo $thongbao;?></div>
            <?php
        }
        if(isset($email) && isset($name)){
            ?>
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="<?php echo $name?>" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="<?php echo $email?>" readonly>
            </div>
        <?php
        }else{
        ?>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
        <?php } ?>
            <div class="form-group">
                <textarea name="content" class="form-control" rows="7" placeholder="Write Messages ..." required></textarea>
            </div>
            <input type="submit" value="Send" class="btn btn-info">
        <?php echo form_close();?>
    </div>
    <div class="col-md-4">
        <div class="logo">
            <a href="<?php echo base_url();?>home">
                <img src="<?php echo base_url();?>public/img/logo/logo.png" alt="annpio">
                <h1>NNPIO <br> <span style="color: #2e323b">Thế giới giày nữ</span></h1>
            </a>
        </div>
        <div style="padding-top: 150px">
            <b>Địa chỉ: </b><i>Tin Kinh Tế-K57, tầng 7, nhà C12 tầng, HUMG, Hà Nội</i><br><br>
            <b>Số Điện Thoại: </b><i>0165456xxxx</i><br><br>
            <b>Hỗ Trợ: </b><i>support@gmail.com</i><br><br>
        </div>
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