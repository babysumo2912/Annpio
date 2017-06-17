<?php include 'header_admin.php';?>
<section class="max">
    <?php
    if(isset($err)){
        echo $err;
    }
    ?>
<div style="padding: 10px">
	<p style="font-weight: 900; font-size: 24px">TỔNG DOANH THU: 50 000 000 <sup>đ</sup></p>
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
			<p>Danh Sách hóa đơn mới cập nhập</p>
			<table class="table table-hover">
				<tr>
					<td>STT</td>
					<td>Ngày đặt</td>
					<td>Tên khách hàng</td>
					<td>Giá trị</td>
				</tr>    				
			</table>
		</div>
		<div style="padding: 10px">
			<p>Danh Sách sản phẩm bán chạy</p>
			<table class="table table-hover">
				<tr>
					<td>STT</td>
					<td>Ngày đặt</td>
					<td>Tên khách hàng</td>
					<td>Giá trị</td>
				</tr>    				
			</table>
		</div>
	</div>
	<div class="col-md-6">
		<div style="padding: 10px">
			<p>Danh Sách top doanh thu nhan vien</p>
			<table class="table table-hover">
				<tr>
					<td>STT</td>
					<td>Ngày đặt</td>
					<td>Tên khách hàng</td>
					<td>Giá trị</td>
				</tr>    				
			</table>
		</div>
		<div style="padding: 10px">
			<p>Danh Sách khach hang tiem nang</p>
			<table class="table table-hover">
				<tr>
					<td>STT</td>
					<td>Ngày đặt</td>
					<td>Tên khách hàng</td>
					<td>Giá trị</td>
				</tr>    				
			</table>
		</div>
	</div>
</div>
</section>
<?php include 'footer.php'?>