<?php 
include'header_admin.php';



 ?>
<!-- nhap kho -->
<?php 
if(isset($nhapkho)){
	foreach ($nhapkho as $key) {};
	$admin = $this->Admin_models->information($key->id_admin);
	if($admin){
		foreach ($admin as $ad) {};
	}


?>
<div style="padding: 20px" class="border padding20 hdadmin">
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
}
	 ?>
	 <!-- end -->
</div>
<!-- nhap kho -->
<?php 
if(isset($xuatkho)){
	foreach ($xuatkho as $key) {};
	$admin = $this->Admin_models->information($key->id_admin);
	if($admin){
		foreach ($admin as $ad) {};
	}


?>
<div style="padding: 20px" class="border padding20 hdadmin">
	<?php 
	if(isset($chitietxuat)){
		$i = 1;
	?>
	<div class="text-center">
		<h3>Phiếu xuất số: <?php echo $key->id_xuatkho ?></h3>
	</div>
	<p><i class="fa fa-calendar"></i>&nbsp;<?php echo substr($key->ngaythang,0,10) ?></p>
	<p><i class="fa fa-clock-o"></i>&nbsp;<?php echo substr($key->ngaythang,11,8) ?></p>
	<p><i class="fa fa-user"></i>&nbsp;<?php echo $ad->name ?></p>
	<p>Tình trạng: <?php echo $key->trangthai ?></p>
	<div class="text-center">
		<p>Thông tin khách hàng</p>
	</div>
	<div>
		<p>Tên khách hàng: <b><?php echo $key->tenkh ?></b></p>
		<p>Số điện thoại: <b><?php echo $key->sdt ?></b></p>
		<p>Địa chỉ: <b><?php echo $key->diachi ?> - <?php echo $key->thanhpho ?></b></p>
		<p></p>
	</div>
	<table class="table table-bordered table-hover">
		<tr>
			<td>STT</td>
			<td>Sản phẩm</td>
			<td>Giá bán</td>
			<td>Số lượng</td>
			<td>Thành tiền</td>
			<!-- <td>Size</td> -->
		</tr>
		<?php 
		foreach($chitietxuat as $ctn){
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td>
				 <img src="<?php echo base_url()?>public/img/product/<?php echo $ctn->img?>" alt="" width="50px" height="50px" style="float: left">
                <?php echo $ctn->sanpham?>
			</td>
			<td>
				<?php echo number_format($ctn->gia) ?>
			</td>
			<td><?php echo $ctn->soluong ?></td>
			<td><?php echo number_format($ctn->thanhtien)  ?></td>
<!-- 			<td>
				<?php echo $ctn->size ?>
			</td> -->
		</tr>
		<?php
		$i++; 
		}

		 ?>
		<tr>
			<td colspan="4" class="text-right">Thanh toán:</td>
			<td>
				<?php echo number_format($key->thanhtoan) ?>
			</td>
		</tr>
	</table>
	<?php
	}
}
	 ?>
	 <!-- end -->
	 </div>
<?php 
include'footer.php';



 ?>