<?php 
include'header_admin.php';
 ?>
<section class="padding20 hdadmin ">
<div class="row">
	<div class="col-sm-6">
		<div style="border: 1px white solid; box-shadow: 5px 5px 15px #ccc; padding: 10px">
			<h4>Danh sách phiếu nhập</h4>
		<?php 
		if(isset($nhapkho)){
		?>
		<table class="table">
			<tr>
				<td>STT</td>
				<td>Phiếu</td>
				<td>Ngày tạo</td>
				<td>Người tạo phiếu</td>
				<td>Tổng hóa đơn</td>
				<td>Số lượng sản phẩm</td>
				<td></td>
			</tr>
			<?php 
			$i = 0;
			foreach($nhapkho as $nk){
				$i++;
				if(isset($admin)){
					foreach($admin as $ad){}
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
				<td><a data-toggle="modal" data-target="#myModal" href="<?php echo base_url()?>admin/view_phieunhap/<?php echo $nk->id_nhapkho ?>"><i class="fa fa-search"></i></a></td>
			</tr>	
			<!-- form chua gia tri cua a -->
			<div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			      </div>
				</div>	
  			</div>
  			<!-- form chua gia tri cua a -->
			<?php
			}

			 ?>
		</table>
		<?php
		}
		 ?>
		</div>
	</div>
	<div class="col-sm-6">
		<div style="border: 1px white solid; box-shadow: 5px 5px 15px #ccc; padding: 10px;margin: 0 10px;">
			<h4>Danh sách đơn hàng xuất</h4>
		</div>
		
	</div>
</div>
</section>

 <?php 
include'footer.php';

  ?>