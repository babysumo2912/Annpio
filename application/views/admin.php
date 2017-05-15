<?php
$name = $this->session->userdata('name');
if(!isset($count_hoadon)){
    $count_hoadon = 0;
}
if(!isset($count_mess)){
    $count_mess = 0;
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
                        <li class="actived"><a href="<?php echo base_url();?>message">MESSAGES <sup class="badge"><?php echo $count_mess?></sup></a></li>
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
                        <li class="actived"><a href="<?php echo base_url();?>home">HOME</a></li>
                        <li><a href="<?php echo base_url();?>oder">ODERS <sup class="badge"><?php echo $count_hoadon ?></sup></a></li>
                        <li><a href="<?php echo base_url();?>adminproduct">PRODUCT</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li class="actived"><a href="<?php echo base_url();?>message">MESSAGES <sup class="badge"><?php echo $count_mess?></sup></a></li>
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
<div class="centerintro">
    <div class="row widthcenterintro">
        <div class="col-md-10">
            <a href="<?php echo base_url() ?>user/logout" class="a">Logout</a>
        </div>
        <div class="col-md-2">
            <a href="<?php echo base_url();?>home" class="a">Home</a>
            /
            <span>Admin</span>
        </div>
    </div>
</div>
<div class="row centerpro">
    <div class="col-md-3">
        <div class="account">
            <p class="title-acc">Account Information</p>
            <div class="account-content">
                <?php
                if(isset($admin)){
                    foreach($admin as $item){
                        ?>
                        <p>Hello <b><?php echo $item->name; ?></b></p>
                        <p>Phone: <?php echo $item->phone?></p>
                        <p>Address: <?php echo $item->address?></p>
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
        <div class="col-md-6 border">
            <p class="text-center"><b>You have <a href="<?php echo base_url()?>oder"><?php echo $count_hoadon?></a> new oder!</b><br></p>
        </div>
        <br><br><br><br><br>
        <div class="col-md-6 border">
            <p class="text-center"><b>You have <a href="<?php echo base_url()?>message"><?php echo $count_mess?></a> new message!</b><br></p>
        </div>
    </div>
    <div class="col-md-12">
        <?php if(isset($user)){
    ?>
            <table class="table table-hover">

                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>&nbsp;</th>
                </tr>
                <?php
                foreach ($user as $itemp){
                    ?>
                <tr>
                    <td><?php echo $itemp->id ?></td>
                    <td><?php echo $itemp->email ?></td>
                    <td><?php echo $itemp->name ?></td>
                    <td><?php echo $itemp->phone ?></td>
                    <td><?php echo $itemp->address ?></td>
                    <td>
                        <a href="<?php echo base_url()?>admin/delete/<?php echo $itemp->id?>" class="btn btn-danger" title="Delete User">
                            <span class="glyphicon glyphicon-remove"></span>
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