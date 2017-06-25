<?php include 'header_admin.php';?>
<section class="max">
    <?php
    if(isset($err)){
        ?>
	<div class="alert alert-danger">
		<p><i class="fa fa-warning"></i> <?php echo $err; ?></p>
	</div>
        <?php
    }
    ?>
<div style="padding: 10px">
	<p style="font-weight: 900; font-size: 24px">TỔNG DOANH THU: 
	<?php
	 if(isset($tongdoanhthu)){
	 	echo number_format($tongdoanhthu);
	 	}else echo 0;

 	 ?> 
	 	<sup>đ</sup>
	</p>
</div>
<!-- <div class="row">
	<div class="col-md-6">
		<form class="form-group">
			<fieldset>
				<legend>Thống kê doanh thu</legend>
			</fieldset>
			<div class="form-group">
				Từ ngày:
				<input type="date" name="" class="form-control">
			</div>
			<div class="form-group">
				Đến ngày:
				<input type="date" name="" class="form-control">
			</div>
		</form>
		<div class="text-center">
			<button class="btn btn-success">
				<i class="fa fa-save"></i> Thống kê
			</button>
		</div>
	</div>
</div>

<hr> -->
<div class="row">
	<div class="col-md-6">
		<div style="padding: 10px">
			<p>Danh sách Top 3 nhân viên có doanh số cao nhất</p>

			<!-- code PHP -->
			<?php 
			if(isset($top_nhvien)){
				$topnv = array();
				foreach ($top_nhvien as $tnv) {
					$ds_hoadon = $this->Admin_models->list_hdnv($tnv->id_admin);
					$doanhthu_nv = 0;
					if($ds_hoadon){
						foreach ($ds_hoadon as $dshd) {
							$doanhthu_nv+=$dshd->thanhtoan;
						};
					}
					$data_dtnv = array(
						'doanhthu' => $doanhthu_nv,
					);
					$topnv[$dshd->id_admin] = $data_dtnv;
				}
				arsort($topnv);
			}

			 ?>

			<table class="table table-hover table-bordered">
				<tr>
					<td>STT</td>
					<td>Tên nhân viên</td>
					<td>Doanh số</td>
					<!-- <td>Giá trị</td> -->
				</tr>
				<?php 
				if(isset($topnv)){
					$i = 0;
					foreach ($topnv as $key => $value) {
						$i++;
						if($i>=4){
							break;
						}
						$thongtin = $this->Admin_models->information($key);
						if($thongtin){
							foreach ($thongtin as $acc) {};
						}
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $acc->name ?></td>
					<td><?php echo number_format($value['doanhthu']) ?></td>
				</tr>
				<?php
					}
				}

				 ?>
				<tr>
					
				</tr>
			</table>
		</div>
	</div>
	<div class="col-md-6">
		<div class="text-center">
			<p><b>Thống kê doanh thu</b>
		<?php if(isset($day_begin) && isset($day_end)){

		
		 ?>
			<br>
			<i>(từ ngày <?php echo $day_begin ?> đến ngày <?php echo $day_end ?>)</i>
			<?php } ?>
			</p>
		</div>
		<?php 
		$check = true;
		if(isset($thongke_nv)){
			$check = false;
			$topnv = array();
				foreach ($thongke_nv as $tnv) {
				$ds_hoadon = $this->Admin_models->list_hdnv_date($day_begin,$day_end,$tnv->id_admin);
				$doanhthu_nv = 0;
				if($ds_hoadon){
					foreach ($ds_hoadon as $dshd) {
						$doanhthu_nv+=$dshd->thanhtoan;
					};
				}
				$data_dtnv = array(
					'doanhthu' => $doanhthu_nv,
				);
				$topnv[$dshd->id_admin] = $data_dtnv;
			}
			arsort($topnv);
			?>
			<caption>Danh sách Top 3 nhân viên đạt doanh thu cao nhất</caption>
			<table class="table table-hover table-bordered">
				<tr>
					<td>STT</td>
					<td>Tên nhân viên</td>
					<td>Doanh số</td>
					<!-- <td>Giá trị</td> -->
				</tr>
				<?php 
				if(isset($topnv)){
					$i = 0;
					foreach ($topnv as $key => $value) {
						$i++;
						if($i>=4){
							break;
						}
						$thongtin = $this->Admin_models->information($key);
						if($thongtin){
							foreach ($thongtin as $acc) {};
						}
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $acc->name ?></td>
					<td><?php echo number_format($value['doanhthu']) ?></td>
				</tr>
				<?php
					}
				}
				}
			?>
				
			</table>
			
		
	 	<?php 
			if(isset($thongke_xk)){
				$check = false;$i = 0; $money = 0;
				foreach ($thongke_xk as $tkxk) {
					$money+=$tkxk->thanhtoan;
					$i++;
				}
				?>
				<div class="alert alert-success">
					Tổng doanh thu: <?php echo number_format($money) ?>
				</div>
				<?php
			}
	  	?>
	  	<?php 
	  	if($check == false){
	  		?>
	  		<div class="text-center">
	  		<a href="<?php echo base_url() ?>admin" class="btn btn-info"><i class="fa fa-check"></i> OK</a>
	  	</div>
	  		<?php
	  	}

	  	 ?>

	  	<?php 
	  	if($check == true){

	  	
	  	 ?>

		<?php echo form_open('admin/thongke') ?>
		<div class="form-group">
			<label>
				Từ ngày:
			</label>
			<input type="date" name="day_begin" required class="form-control">
			
		</div>
		<div class="form-group">
			<label>
				Đến ngày:
			</label>
			<input type="date" name="day_end" required class="form-control">
			
		</div>
		<?php 
		if(isset($err_day)){
		?>
		<div class="text-center alert alert-danger">
			<i class="fa fa-warning"></i> <?php echo $err_day ?>
		</div>
		<?php
		}

		 ?>
		 <?php 
		if(isset($err_nv)){
		?>
		<div class="text-center alert alert-danger">
			<i class="fa fa-warning"></i> <?php echo $err_nv ?>
		</div>
		<?php
		}

		 ?>
		<div class="text-center">
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-search"></i>&nbsp;Tìm kiếm
			</button>
		</div>
		<?php echo form_close() ?>
	</div>
	<?php } ?>
</div>
</section>
<?php include 'footer.php'?>