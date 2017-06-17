<!DOCTYPE html>
<html> 
<head>
	<title>Admin - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/style.css">
    <link rel="icon" href="<?php echo base_url();?>public/img/logo/icon.png">
    <link rel="stylesheet" href="<?php echo base_url()?>public/style/css/font-awesome.min.css">
    <script src="<?php echo base_url();?>public/style/js/jquery-3.1.0.js"></script>
    <script src="<?php echo base_url();?>public/style/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/filejs.js"></script>
</head>
<body class="body-login">
  <div class="waper-login">
    <div class="form-login" style = "border-radius:10px 10px 0 0;">
      <div class="login-f">
        <p class="title-login text-center">
          <span><img src="<?php echo base_url()?>public/img/logo/icon.png" alt="iconAnnpio"></span>
          <b>AnnPio</b><sup>&reg;</sup>
        </p>
        <?php 
            if(isset($err)){
              ?>
              <div class="error">
                <i class="fa fa-exclamation-triangle fa-lg" aria-hidden="true"></i> &nbsp;<?php echo $err ?>
              </div>
              <?php
            }
            ?>
        <!--<p>Register an account now to receive incentives from us.</p>-->
        <?php 
        $style = array(
          "style" => "padding-top: 20px;",
          "class" => "form-group",
        );
        echo form_open("admin/login", $style);
        ?>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-secret fa-lg"></i></span>
                <input type="text" class="form-control" name="account" placeholder="Tài  khoản" required>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
              </div>
            </div>
            <div class="form-group">
                <a href="">Quên mật khẩu?</a>
                <input type="submit" name="login" class="btn btn-default" style="float: right;" value="Đăng nhập">
            </div>
        <?php echo form_close() ?>
     </div>
    </div>
    <div class="text-center" style="margin:5% 0;">
      <a href="<?php echo base_url()?>home"><i class="fa fa-arrow-left fa-lg"></i> &nbsp;Back to home</a>
    </div>
    <div class="text-center form-login" style = "border-radius:0 0 10px 10px ;">
      <b>Demo</b>
      <p>Account: admin <br>Password: admin</p>
    </div>
  </div>
  <p class="coppyright">Copyright© 2017 Lai Thi Lan Anh - 1221050146.</p>
  </body>
</html>