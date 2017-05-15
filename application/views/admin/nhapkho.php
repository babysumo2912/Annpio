<?php include 'header_admin.php';?>
<section class = "border padding20 hdadmin">
    <div class = "text-center title-phieu">
        <span>Phiếu Nhập Kho</span>
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
        </div>
        <div class = "right">
<!--            </i><input type="submit" value="Lưu" class = "btn btn-success">-->
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i> Lưu
            </button>
        </div>
    </div>
    <div class = "form_nhap">
        <?php
        $style = array(
            'class' => 'form-group',
        );
        echo form_open('admin/nhapkho',$style);
        ?>
        <div class = "form-group">
            <div class = "table">
                <table class = "table">
                    <tr>
                        <th>ID</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá nhập</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="text" name = "name" class = "form-control">
                        </td>
                        <td>
                            <input type="text" name = "name" class = "form-control">
                        </td>
                        <td>
                            <input type="text" name = "name" class = "form-control">
                        </td>
                        <td>
                            <input type="text" name = "name" class = "form-control">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php echo form_close();?>
    </div>
</section>
<section class = "hdadmin margin20">
    <div class="title_kho">
        Danh sách hóa đơn nhập
    </div>
    <div class="hd2">
        <a href=""></a>
        <i class = "fa fa-plus-square"></i>&nbsp;<span>Thêm mới</span>
    </div>
</section>
<?php include 'footer.php'?>
