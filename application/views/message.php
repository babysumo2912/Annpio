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
        <h1>Bạn có <a href="<?php echo base_url()?>message"><?php echo $count_mess?></a> tin nhắn mới</h1>
    </div>
</div>
<div class="row centerpro">
    <div class="col-md-12 center" id="content">
            <div class="col-md-4">
                <form class="form-group">
                    <fieldset>
                        <legend>Xem chi tiet</legend>
                <?php
                if(isset($view_mess)) {
                foreach ($view_mess as $temp) {
                ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?php echo $temp->name ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?php echo $temp->email ?>">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="7"><?php echo $temp->content ?></textarea>
                </div>
                    <a href="<?php echo base_url()?>message" class="btn btn-success">OK</a>
                <?php
                    }
                } ?>
                    </fieldset>
                </form>
            </div>
        <?php
            if (isset($messenger)) {
                ?>
                <div class="col-md-8">
                <table class="table table-hover">
                <tr>
                    <th>Ngày gửi</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th><a href="" class="btn btn-info form-control">Đã đọc</a></th>
                </tr>
                <?php
                foreach ($messenger as $item) {
                    ?>
                    <tr>
                        <td><?php echo $item->date ?></td>
                        <td><?php echo $item->name ?></td>
                        <td><?php echo $item->email ?></td>
                        <td>
                            <a href="<?php echo base_url() ?>message/view_chitiet/<?php echo $item->id ?>"
                               class="btn btn-primary edit" title="Xem chi tiết">
                                <span class="glyphicon glyphicon-search"></span>
                            </a>
                            <a href="" class="btn btn-danger delete" title="Delete">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        </td>
                    </tr>
                    </table>
                    </div>
                    <?php
                }
            } else{
                ?>
                <div class="text-center col-md-8">
                    <img src="<?php echo base_url()?>public/img/nocart.png" alt="matmeu"><br><br>
                    <p>Bạn chưa nhận được tin nhắn nào hết.</p><br>
                </div>
        <?php
            }
        ?>
    </div>
</div>