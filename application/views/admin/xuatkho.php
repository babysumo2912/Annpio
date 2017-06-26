<?php 
include'header_admin.php';
// echo '<pre>';
// var_dump($cart_offline);
// echo '<pre>';
// die();
?>
<?php 
	if(isset($err_buy)){

	

 ?>
<section class="text-center alert alert-danger">
	<b>
		<i class="fa fa-warning"></i>
		&nbsp;
		<?php 
		
			echo $err_buy;
		

 		?>
	</b>
</section>
<?php } ?>
<section class="padding20 hdadmin">
    <div class = "form_nhap row">
        <div class="col-xs-5" style="border: 1px #ccc solid; float:left">
            <div class="text-center" style="padding: 15px">
                <b>Sản phẩm trong kho</b>
            </div>
            <div class="search">
                <?php
                $style = array(
                    'class' => 'form-group',
                );
                echo form_open('xuatkho/searchsp',$style);
                ?>
                <div class="input-group">
                    <input type="text" class="form-control" name="key" placeholder="Tìm kiếm theo tên...">
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <?php echo form_close();?>
                <?php
                if(isset($err)){
                    ?>
                    <p class="text-center" style="color: red">
                        <i class="fa fa-warning"></i> &nbsp;
                        <?php echo $err;?>
                    </p>
                    <?php
                }
                ?>
            </div>
            <?php
            if(isset($data_search)){
                ?>
                <div style="height:300px;overflow-x: hidden ">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td></td>
                            <td>Sản phẩm</td>
                            <td>Size</td>
                            <td>Số lượng tồn</td>
                            <td>Giá bán</td>
                        </tr>
                        <?php
                        foreach ($data_search as $item){
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url()?>xuatkho/check_sp/<?php echo $item->id?>"><i class="fa fa-check"></i></a>
                                </td>
                                <td>
                                    <img src="<?php echo base_url()?>public/img/product/<?php echo $item->img?>" alt="" width="50px" height="50px" style="float: left">
                                    <?php echo $item->name?>
                                </td>
                                <td><?php echo $item->size?></td>
                                <td>
                                    <?php echo number_format($item->number)?>
                                </td>
                                <td>
                                    <?php echo number_format($item->price)?><sup>đ</sup>
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
        <?php if(isset($check)){?>
        <?php 
        echo form_open('xuatkho/buy')
         ?>
        <div class="col-xs-5" style="border: 1px #ccc solid;float: right">
        	<div class="text-center" style="padding: 15px">
                <b>Thông tin chi tiết</b>
            </div>
            <?php foreach($check as $value){}
            $catalog = $this->Home_models->getinfo('tb_catalog','madanhmuc',$value->madanhmuc);
            if($catalog){
                foreach ($catalog as $getdm){};
            }
            ?>
            <div class="form-group">
                <div class="col-xs-4">
                    Mã sản phẩm:
                </div>
                <div class="col-xs-6">
                    <input type="text" name="masanpham" readonly value="<?php echo $value->madanhmuc.' '.$value->id?>"  style="border: none; background: inherit">
                </div>
            </div>
            <div class="form-group">
                <img src="<?php echo base_url() ?>public/img/product/<?php echo $value->img ?>" alt="" width="100px" height="100px">
                <?php echo $value->name?>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                   Danh mục:
                </div>
                <div class="col-xs-6">
                    <?php echo $getdm->name?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
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
            <div class="form-group row">
                <div class="col-xs-6">
                    Giá bán hiện tại:
                </div>
                <div class="col-xs-6">
                    <?php echo number_format($value->price)?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    Số lượng: 
                </div>
                <div class="col-xs-6" id="soluong">
                    <input type="number" name="number" value="1" min="0" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    &nbsp; Thêm
                </button>
            </div>
        </div>
        <?php echo form_close() ?>
        <?php }?>
    </div>
</section>
<?php 
echo form_open('xuatkho/xuatkho_off')
 ?>
<section class=" border padding20 hdadmin">

	<div class = "text-center title-phieu">
        <span>Phiếu Xuất Kho</span>
    </div>
    <div class = "date">
        <i class = "fa fa-calendar"></i>
        <?php
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $datestring = "%d - %m - %Y";
        $time = time();
        echo mdate($datestring, $time);
        ?>
        <br>
        <i class = "fa fa-clock-o"></i>
        <?php
        echo mdate("%h:%i:%a",time());
        ?>
    </div>
    <div class="content-admin">
    	<p>
    		<span>Người tạo phiếu: </span>
    		<?php 
    		foreach($admin as $row){
    			echo $row->name;
    		}
    		 ?>
    	</p>
    	<p>
    		<span>Tình trạng: </span> Đơn hàng offline
    	</p>
    </div>
    <hr>
    <div class="content-admin">
    	<div class = "text-center title-phieu">
        	<span>Thông tin khách hàng</span>
    	</div>	
    	<br>
    	<div class="form-group row">
			<div class="col-xs-2">
				Khách hàng: 
			</div>
			<div class="col-xs-4">
				<input type="text" name="khachhang" required class="form-control">
			</div>
    	</div>
    	<div class="form-group row">
			<div class="col-xs-2">
				Số điện thoại: 
			</div>
			<div class="col-xs-4">
				<input type="tel" pattern="([0]{1})([0-9]{9,})" name="phone" class="form-control" placeholder="Số Điện Thoại ..." required>
			</div>
    	</div>
    	<div class="form-group row">
			<div class="col-xs-2">
				Địa chỉ: 
			</div>
			<div class="col-xs-4">
				<input type="text" name="diachi" required class="form-control">
			</div>
    	</div>
    	<div class="form-group row">
			<div class="col-xs-2">
				Thành phố:	
			</div>
			<div class="col-xs-4">
				<select name="city" class="form-control"> 
					<option value="Ha Noi">Hà Nội</option>
					<option value="TP. Ho Chi Minh">TP. Hồ Chí Minh</option>
					<option value="Nha Trang">Nha Trang</option>
					<option value="Da Nang">Đà Nẵng</option>
				</select>
			</div>
    	</div>
    </div>
    <div class="content-admin">
    	<div class="text-center">
    		<p>Danh sách sản phẩm</p>
    	</div>
    	<table class="table table-bordered table-hover">
    		<tr>
    			<td>STT</td>
    			<td>Sản phẩm</td>
                <td>Size</td>
    			<td>Giá bán</td>
    			<td>Số lượng</td>
    			<td>Thành tiền</td>
    			<td></td>
    		</tr>
    		<?php 
    		$money = 0;
    		if(isset($cart_offline)){
    			// echo '<pre>';
    			// var_dump($cart_offline);
    			// echo '<pre>';
    			// die();
    			$i = 0;
    			foreach ($cart_offline as $key => $value) {
    				$money+=($value['giaban'] * $value['soluong']);
    				$i ++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<img src="<?php echo base_url()?>public/img/product/<?php echo $value['img']?>" alt="" width="50px" height="50px" style="float: left">
                	<?php echo $value['tensanpham']?>
				</td>
                <td><?php echo $value['size'] ?></td>
				<td>
					<?php echo number_format($value['giaban']) ?>
				</td>
				<td>
					<?php echo $value['soluong'] ?>
				</td>
				<td>
					<?php echo number_format($value['giaban'] * $value['soluong']) ?>
				</td>
				<td>
					<a href="<?php echo base_url() ?>xuatkho/delete/<?php echo $value['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm <?php echo $value['tensanpham'] ?>')"><i class="fa fa-remove"></i></a>
				</td>
			</tr>
			<?php
    			}
    		}

    		 ?>
    		 	<tr>
    		 		<td colspan="4">
    		 			<p style="float: right">Thanh toán: </p>
    		 		</td>
    		 		<td>
    		 			<p class="text-center"><?php echo number_format($money); ?></p>
    		 		</td>
    		 		<td></td>
    		 	</tr>
    	</table>
    	<div class="text-center">
    		<button class="btn btn-primary">
				<i class="fa fa-save"></i>
				&nbsp; Lưu hóa đơn
    		</button>
    	</div>
    </div>
</section>
<?php echo form_close(); ?>
<?php 
include'footer.php';

?>
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