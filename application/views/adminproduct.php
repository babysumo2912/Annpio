<?php
$name = $this->session->userdata('name');
$login = $this->session->userdata('login');
if(!isset($count_hoadon)){
    $count_hoadon = 0;
}
if(!isset($couunt_mess)){
    $couunt_mess = 0;
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
                        <li><a href="<?php echo base_url();?>oder">ODERS <sup class="badge"><?php echo $count_hoadon?></sup></a></li>
                        <li><a href="<?php echo base_url();?>adminproduct">PRODUCT</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url();?>message">MESSAGES <sup><?php echo $couunt_mess?></sup></a></li>
                    </ul>
                </div>
                <div class="menurightfix">
                    <ul class="nav navbar-nav">
                        <li>
                            <?php
                            if(isset($name)){ ?>
                                <a href="<?php base_url()?>user">
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
                        <li><a href="<?php echo base_url();?>oder">ODERS <sup class="badge"><?php echo $count_hoadon?></sup></a></li>
                        <li class="actived"><a href="<?php echo base_url();?>adminproduct">PRODUCT</a></li>
                        <li><a href="<?php echo base_url();?>news">NEWS</a></li>
                        <li><a href="<?php echo base_url();?>message">MESSAGES <sup class="badge"><?php echo $couunt_mess?></sup></a></li>
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
    <div class="row widthcenterintro">
        <div class="col-md-10">
            <a href="<?php echo base_url() ?>user/logout" class="a">Logout</a>
        </div>
        <div class="col-md-2">
            <a href="<?php echo base_url();?>user" class="a">Admin</a>
            /
            <span>Product</span>
        </div>
    </div>
</div>
<div class="row centerpro">
    <?php
    if(isset($data_edit)){
        foreach($data_edit as $item){};
        ?>
        <div class="form-group col-md-6">
            <img src="<?php echo base_url()?>/public/img/product/<?php echo $item->img?>" alt="<?php echo $item->name?>" width="350px" height="400px">
        </div>
        <?php
        $style = array(
            'class' => 'form-group col-md-4',
            'entype' =>'multipart/form-data',
        );
        echo form_open('adminproduct/edit',$style);
        ?>
        <div class="form-group">
            <fieldset>
                <legend><b>Form Edit</b></legend>
                <?php
                if(isset($err)) {
                ?>
                    <div class="form-group err">
                        <p><b><?php echo $err?></b></p>
                    </div>
                <?php
                }
                ?>
                <div class="form-group">
                    <b>ID</b>
                    <input type="number" name="id" class="form-control" value="<?php echo $item->id?>" readonly>
                </div>
                <div class="form-group">
                    <b>Name Product:</b>
                    <input type="text" name="name" value="<?php echo $item->name?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <b>File Img:</b>
                    <input type="file" name="userfile">
                </div>
                <div class="form-group">
                    <b>Price Product:</b>
                    <input type="number" name="price" value="<?php echo $item->price?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <b>Number Product:</b>
                    <input type="number" name="number" value="<?php echo $item->number?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <b>Catalog:</b>
                    <select name="catalog" id="" class="form-control">
                        <?php
                        switch ($item->catalog){
                            case 1:
                                ?>
                                <option value="1" selected>Sandal</option>
                                <option value="2">Pumps</option>
                                <option value="3">Sport Shoes</option>
                                <?php
                                break;
                            case 2:
                                ?>
                                <option value="1">Sandal</option>
                                <option value="2" selected>Pumps</option>
                                <option value="3">Sport Shoes</option>
                                <?php
                                break;
                            case 3:
                                ?>
                                <option value="1">Sandal</option>
                                <option value="2">Pumps</option>
                                <option value="3" selected>Sport Shoes</option>
                                <?php
                                break;
                            default:
                                ?>
                                <option value="1">Sandal</option>
                                <option value="2">Pumps</option>
                                <option value="3">Sport Shoes</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </fieldset>
        </div>
    <?php
        echo form_close();
    }
    ?>
    <?php
    if(isset($product)){
    ?>
    <div class="col-md-12">
        <table class="table table-hover tb_product">
                <h3><b>Table Product</b></h3>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Img</th>
                <th>Name</th>
                <th>Price (VND)</th>
                <th>Number</th>
                <th>Catalog</th>
                <th>
                    <a href="<?php echo base_url()?>addproduct" class="btn btn-primary form-control">
                        <span class="glyphicon glyphicon-pencil"></span>
                        &nbsp;
                        Add New
                    </a>
                </th>
            </tr>
            <?php
                foreach($product as $item){
                    ?>
                    <tr>
                        <td><?php echo $item->id;?></td>
                        <td><?php echo $item->date?></td>
                        <td>
                            <img src="<?php echo base_url()?>public/img/product/<?php echo $item->img?>" alt="<?php echo $item->name?>">
                        </td>
                        <td><?php echo $item->name;?></td>
                        <td><?php echo number_format($item->price);?></td>
                        <td><?php echo $item->number?></td>
                        <td>
                            <?php
                            switch($item->catalog){
                                case 1:
                                    echo 'Sandal';
                                    break;
                                case 2:
                                    echo 'Pumbs';
                                    break;
                                case 3:
                                    echo 'Sport Shoes';
                                    break;
                                default:
                                    echo '';
                                    break;
                            }
                            ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url()?>adminproduct/product/<?php echo $item->id?>" class="btn btn-success edit" title="Sửa thông tin sản phẩm">
                                <span class="glyphicon glyphicon-cog"></span>
                            </a>
                            <a href="<?php echo base_url()?>adminproduct/delete/<?php echo $item->id?>" class="btn btn-danger delete" title="Xóa thông tin sản phẩm">
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
                            <a href="<?php echo base_url()?>adminproduct/page/<?php echo $page?>"><?php echo $page ?></a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
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