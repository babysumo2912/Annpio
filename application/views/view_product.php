<?php
$login = $this->session->userdata('login');
$name = $this->session->userdata('name');
$count = $this->session->userdata('count');
if(isset($product)){
    foreach($product as $sp){}
    // $catalog = $this->Home_models->getinfo('tb_catalog','id',$sp->catalog);
    // if($catalog){
//         foreach($catalog as $dm){};
//     }
}
if(isset($err)){
    echo $err.'<a href="'.base_url().'"product>Quay lại trang sản phẩm</a>';
    die();
}
?>
<html>
<head>
    <title>AnnPio - Sản phẩm</title>
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
        echo form_open('product/login/'.$sp->id,$style);
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
        <p class="title-login">Đăng ký</p>
        <p>Vui lòng điền đầy đủ thông tin bên dưới</p>
        <?php
        echo form_open('home/register',$style);
        ?>
        <div class="form-group">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Họ và tên ..." required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email ..." required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu ..." required>
            </div>
            <div class="form-group">
                <input type="submit" name="register" class="btn btn-info" value="Đăng kí">
                <a href="#login-box" class="relogin-window">Đăng nhập</a>
            </div>
        <?php
        echo form_close();
        ?>
        </div>
    </div>
</div>
<!--    //form login register-->
<?php
echo form_open('home/buy/'.$sp->id);
?>
<div class="centerintro">
    <div class="row widthcenterintro">
        <div class="col-md-10">
            <span class="a"><?php echo $sp->name;?></span>
        </div>
    </div>
</div>
<div class = "col-md-12 col-sm-12 col-xs-12" style="margin: 20px 0;">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <img src="<?php echo base_url();?>public/img/product/<?php echo $sp->img ?>" alt="<?php echo $sp->name?>" width="100%">
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12" style="border: 1px white solid; box-shadow: 5px 5px 15px #ccc;">
        <h1><?php echo $sp->name?></h1>
        <h2 style="color: red"><?php echo number_format($sp->price)?><sup>đ</sup></h2>
        <hr>
        <?php echo $sp->mota ?>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="col-xs-4">
                    Size:
                </div>
                <div class="col-xs-6">
                    <select class="form-control" id="size" name="size">
                    <?php 
                    if(isset($size)){
                        foreach($size as $sz){
                    ?>
                    <option value="<?php echo $sz->id?>"><?php echo $sz->size ?></option>
                    <?php
                        }
                    }

                    ?>
                        <!-- <option></option> -->
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="col-xs-4">
                    Số lượng:
                </div>
                <div class="col-xs-6" id="soluong">
                    <input type="number" name="number" value="1" min="0" max="<?php echo $sp->number?>" class="form-control">
                </div>
            </div>
        </div>
        <hr>
        <button class="btn btn-success" style="margin-bottom: 10px" type="submit">
            <span class="glyphicon glyphicon-shopping-cart"></span>
            &nbsp; Thêm vào giỏ hàng
        </button>
    </div>
</div>
<?php
echo form_close();
?>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#size').on('change',function(){
            var id = $(this).val();
            // alert($id);
            $.ajax({
                url:"<?php echo base_url() ?>product/get_size",
                type: "POST",
                data: {'id' : id},
                dataType: 'json',
                success: function(data){
                   $('#soluong').html(data);
                },
                error: function(){
                    alert('Error occur...!!');
                }
            });
        });
    });
</script>