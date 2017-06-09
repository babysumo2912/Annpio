<?php 
if(isset($nhapkho)){
	foreach ($nhapkho as $key) {};
	$admin = $this->Admin_models->information($key->id_admin);
	if($admin){
		foreach ($admin as $ad) {};
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/font-awesome.css">
    <link rel="icon" href="<?php echo base_url();?>public/img/logo/icon.png">
    <script src="<?php echo base_url();?>public/style/js/jquery-3.1.0.js"></script>
    <script src="<?php echo base_url();?>public/style/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/filejs.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/tinymce.min.js"></script>
<!--    <script>tinymce.init({ selector:'textarea' });</script>-->
<!--    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url();?>public/style/plugin/tinymce/init-tinymce.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<div style="padding: 20px">
	<?php 
	if(isset($chitietnhap)){
		$i = 1;
	?>
	<div class="text-center">
		<h3>Phiếu nhập số: <?php echo $key->id_nhapkho ?></h3>
	</div>
	<p><i class="fa fa-calendar"></i>&nbsp;<?php echo substr($key->date,0,10) ?></p>
	<p><i class="fa fa-clock-o"></i>&nbsp;<?php echo substr($key->date,11,8) ?></p>
	<p><i class="fa fa-user"></i>&nbsp;<?php echo $ad->name ?></p>
	<table class="table table-bordered table-hover">
		<tr>
			<td>STT</td>
			<td>Sản phẩm</td>
			<td>Giá bán</td>
			<td>Giá nhập</td>
			<td>Số lượng</td>
			<td>Thành tiền</td>
			<td>Size</td>
		</tr>
		<?php 
		foreach($chitietnhap as $ctn){
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td>
				 <img src="<?php echo base_url()?>public/img/product/<?php echo $ctn->anhsanpham?>" alt="" width="50px" height="50px" style="float: left">
                <?php echo $ctn->tensanpham?>
			</td>
			<td>
				<?php echo number_format($ctn->giaban) ?>
			</td>
			<td>
				<?php echo number_format($ctn->gianhap) ?>
			</td>
			<td><?php echo $ctn->soluong ?></td>
			<td><?php echo number_format($ctn->gianhap * $ctn->soluong)  ?></td>
			<td>
				<?php echo $ctn->size ?>
			</td>
		</tr>
		<?php
		$i++; 
		}

		 ?>
	</table>
	<?php
	}

	 ?>
</div>
</body>
</html>