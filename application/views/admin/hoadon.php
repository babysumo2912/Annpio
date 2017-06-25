<?php
if(isset($view_single) && isset($view_single_order)){
    foreach ($view_single as $item){}
    $count = 0;
    $money = 0;
    foreach ($view_single_order as $row){
        $count += $row->qty;
        $money += $row->subtotal;
    }
}
include'header_admin.php';
?>
<div class="row centerpro">
    <?php
    if(isset($view_single_order) && isset($view_single)){
    foreach ($view_single as $item){};
    ?>
    <div class="col-md-7 table-bordered">
        <div class="col-md-12 text-center">
            <br>
            <b>Thông Tin Người Nhận</b>
            <br><br>
        </div>
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <td>Tên Khách Hàng</td>
                    <td><?php echo $item->name?></td>
                </tr>
                <tr>
                    <td>Số Điện Thoại</td>
                    <td><?php echo $item->phone?></td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td><?php echo $item->address?></td>
                </tr>
                <tr>
                    <td>Thành phố</td>
                    <td><?php echo $item->city?></td>
                </tr>
                <tr>
                    <td>Ghi Chú</td>
                    <td><?php echo $item->ghichu?></td>
                </tr>
                <tr>
                    <th>Hình Thức Thanh Toán</th>
                    <td>Thanh Toán Khi Giao Hàng COD</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-5">
        <div class="well">
            <fieldset>
                <legend>Đơn Hàng (#<?php echo $item->id?>) (<?php echo $count?><sup>sp</sup>)</legend>
                <legend>
                    <table class="table table-hover tb_product_tt">
                        <?php
                        if(isset($view_single_order)){
                            foreach ($view_single_order as $row){
                                ?>

                                <tr>
                                    <td>
                                        <img src="<?php echo base_url()?>public/img/product/<?php echo $row->img?>" alt="">
                                        <sup class="badge"><?php echo $row->qty?></sup>
                                    </td>
                                    <td>
                                        <?php echo $row->name?> - <?php echo $row->size ?>
                                    </td>
                                    <td  class="text-right">
                                        <?php echo number_format($row->subtotal)?>
                                        <sup>đ</sup>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        ?>
                        <tr>
                            <td colspan="2">Tạm Tính</td>
                            <td class="text-right"><?php echo number_format($money)?> <sup>đ</sup></td>
                        </tr>
                        <tr>
                            <td colspan="2">Phí Vận Chuyển</td>
                            <td class="text-right">40.000 <sup>đ</sup></td>
                        </tr>
                    </table>
                </legend>
                <legend>
                    <p class="text-right">
                        Tổng Cộng: <?php echo number_format($money+40000)?><sup>đ</sup>
                    </p>
                </legend>
            </fieldset>
        </div>
    </div>
    <div class="text-center">
        <a href="<?php echo base_url()?>xuatkho/hoadon/<?php echo $item->id?>" class="btn btn-success">
            <span class="glyphicon glyphicon-send"></span> &nbsp;
            Tạo phiếu xuất
        </a>
    </div>
</div>
<?php
}else{
?>
<?php 
if(isset($err)){
    ?>
    <div class="alert alert-danger">
        <p><i class="fa fa-warning"></i> <?php echo $err ?></p>
    </div>
    <?php
}

?>
<table class="table table-hover">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Ngày mua</th>
        <th>Tên Khách Hàng</th>
        <th>Số Điện Thoại</th>
        <th>Thanh Toán</th>
        <th>Ghi Chú</th>
        <th><a href="<?php echo base_url()?>old_oder" class="btn btn-success form-control">Hóa đơn đã giao</a></th>
    </tr>
<?php
if(isset($oder)) {
?>

    <?php
    foreach ($oder as $item) {
        ?>
        <tr>
            <td><?php echo $item->id ?></td>
            <td><?php echo $item->date ?></td>
            <td><?php echo $item->name ?></td>
            <td><?php echo $item->phone ?></td>
            <td class="text-right"><?php echo number_format($item->money) ?><sup>đ</sup></td>
            <td><?php echo $item->ghichu ?></td>
            <td>
                <a href="<?php echo base_url() ?>hoadon/view_chitiet/<?php echo $item->id ?>"
                   class="btn btn-primary edit" title="Xem chi tiết">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
                <a href="<?php echo base_url()?>hoadon/delete/<?php echo $item->id?>" class="btn btn-danger delete" title="Hủy hóa đơn" onclick="return confirm('Xóa hóa đơn sẽ giảm uy tín của cửa hàng, bạn có chắc chắn muốn xóa hóa đơn không?')">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
            </td>
        </tr>
        <?php
    }
    }else{
    ?>
    <tr>
        <td colspan="7">
            <div class="row centerpro">
                <div class="text-center">
                    <img src="<?php echo base_url()?>public/img/nocart.png" alt="matmeu"><br><br>
                    <p>Hiện tại bạn không có đơn hàng nào.</p><br>
                </div>
            </div>   
        </td>
    </tr>
    <?php
    }
    ?>
</table>
<?php } ?>
<div class="col-sm-12 text-center">
    <ul class="pagination">
        <?php
        if(isset($fullpage)) {
            for ($page = 1; $page <= $fullpage; $page++) {
                ?>
                <li>
                    <a href="<?php echo base_url()?>hoadon/page/<?php echo $page?>"><?php echo $page ?></a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
</div>
</div>

<?php
include "footer.php";

?>
