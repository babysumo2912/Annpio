<?php 
include'header_admin.php';
?>
<?php 
if(isset($view_single)){
	foreach ($view_single as $key) {};
 ?>
<section class = "border padding20 hdadmin">
<?php
//    echo form_open();
//
//    ?>
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
    <?php 
    echo form_open('xuatkho/luucsdl/'.$key->id)

     ?>
    <div class = "content_admin">
        <div class = "left">
            <p class = "people">
            <span>Người tạo:</span>
                <?php
                if(isset($admin)){
                    foreach ($admin as $row){
                        echo $row->name;
                    }
                } ?>
            </p>
 			<p>Nội dung xuất đơn: Xuất đơn hàng có mã số: <?php echo $key->id ?> (đơn hàng online)</p>
        </div>
    </div>
    <?php
    if(isset($err_luu)){
    ?>
    <p style="color: red"><i class="fa fa-warning"></i> <?php echo $err_luu?></p>
    <?php
    }
    ?>
    <div style="margin-top: 50px">
        <div class = "form_nhap">
        <div>
	        <div class="text-center">
	        	<h4>Thông tin khách hàng</h4>
	        </div>
        	<p>Tên khách hàng: <b><?php echo $key->name ?></b></p>
        	<p>Số điện thoại: <b><?php echo $key->phone ?></b></p>
        	<p>Địa chỉ: <b><?php echo $key->address ?></b></p>
        	<p>Thành phố: <b><?php echo $key->city ?></b></p>
        	<p>Ghi chú: <?php echo $key->ghichu ?></p>
        	<?php 
			}
        	 ?>
        </div>
            <table class="table table-bordered table-hover">
                <tr>
                    <td>STT</td>
                    <td>Sản Phẩm</td>
                    <td>Size</td>
                    <td>Giá</td>
                    <td>Số lượng</td>
                    <td>Thanh toán</td>
                </tr>
                <?php
                if(isset($view_single_order)){
                	$i = 1;
            		foreach ($view_single_order as $row) {
    			?>
    			<tr>
    				<td><?php echo $i; ?></td>
    				<td>
    					<img src="<?php echo base_url()?>public/img/product/<?php echo $row->img?>" alt="" width="50px" height="50px">
                        <?php echo $row->name?>
    				</td>
                    <td>
                        <?php echo $row->size ?>
                    </td>
    				<td>
    					<?php echo number_format($row->price) ?>
    				</td>
    				<td>
    					<?php echo $row->qty ?>
    				</td>
    				<td>
    					<?php echo number_format($row->subtotal )?>
    				</td>
    			</tr>
    			<?php
    			$i++;
            		}
                }
                ?>
                
                <tr>
                    <td colspan="4">
                        <b style="float:right">Thanh toán</b>
                    </td>
                    <td>
                        <?php echo number_format($key->money);?>
                    </td>
                </tr>
            </table>
            <div class="text-right">
                    <input type="submit" name="capnhap" class="btn btn-primary" value="Lưu CSDL">
            </div>
        </div>
    </div>
<?php
   echo form_close();
//
//    ?>
</section>

<?php 
include'footer.php';
 ?>