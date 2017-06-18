<?php 
include'header_admin.php';
 ?>
<section class="padding10 hdadmin ">
<div class="row">
	<div class="col-sm-12">
		<div style="border: 1px white solid; box-shadow: 5px 5px 15px #ccc; padding: 10px;margin: 0 10px; ">
			<h4>Danh sách phiếu nhập</h4>
		<?php 
		if(isset($nhapkho)){
		?>
		<div style="height: 250px; overflow-x: hidden">
			<table class="table table-bordered table-hover">
				<tr>
					<td>STT</td>
					<td>Phiếu</td>
					<td>Ngày tạo</td>
					<td>Người tạo</td>
					<td>Giá trị</td>
					<td>Số lượng</td>
					<td></td>
				</tr>
				<?php 
				$i = 0;
				foreach($nhapkho as $nk){
					$i++;
					$nguoitao = $this->Admin_models->information($nk->id_admin);
					if(isset($nguoitao)){
						foreach($nguoitao as $ad){}
					}

				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $nk->id_nhapkho ?></td>
					<td><?php echo substr($nk->date,0,10)?></td>
					<td>
						<?php echo $ad->name ?>
					</td>
					<td><?php echo number_format($nk->money) ?></td>
					<td><?php echo number_format($nk->number) ?></td>
					<td><a href="<?php echo base_url()?>admin/view_phieunhap/<?php echo $nk->id_nhapkho ?>"><i class="fa fa-search"></i></a>
					</td>
				</tr>	
				<?php
				}

				 ?>
			</table>		
		</div>
		<?php
		}
		 ?>
		</div>
	</div>
	<div class="col-sm-12">
		<div style="border: 1px white solid; box-shadow: 5px 5px 15px #ccc; padding: 10px;margin: 0 10px; ">
			<h4>Danh sách đơn hàng xuất</h4>
			<?php 
		if(isset($xuatkho)){
		?>
		<div style="height: 250px; overflow-x: hidden">
			<table class="table table-bordered table-hover">
				<tr>
					<td>STT</td>
					<td>Phiếu</td>
					<td>Ngày tạo</td>
					<td>Người tạo</td>
					<td>Giá trị</td>
					<td>Số lượng</td>
					<td></td>
				</tr>
				<?php 
				$i = 0;
				foreach($xuatkho as $nk){
					$i++;
					$nguoitao = $this->Admin_models->information($nk->id_admin);
					if(isset($nguoitao)){
						foreach($nguoitao as $ad){}
					}

				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $nk->id_xuatkho ?></td>
					<td><?php echo substr($nk->ngaythang,0,10)?></td>
					<td>
						<?php echo $ad->name ?>
					</td>
					<td><?php echo number_format($nk->thanhtoan) ?></td>
					<td><?php echo number_format($nk->soluong) ?></td>
					<td>
						<a href="<?php echo base_url()?>admin/view_phieuxuat/<?php echo $nk->id_xuatkho ?>">
						<?php 
						if($nk->trangthai == "Don offline"){
						?>
						<i class="fa fa-building"></i>
						<?php
						}else{
						?>
						<i class="fa fa-truck"></i>
						<?php
						}

						 ?>
						</a>
					</td>
				</tr>	
				<?php
				}

				 ?>
			</table>
		</div>
		<?php
		}
		 ?>
		</div>
		
	</div>
</div>
</section>

 <?php 
include'footer.php';

  ?>