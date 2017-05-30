<?php
include'header_admin.php';
?>
<section class="max">
    <div class="text-center">
        <h2>Danh sách nhân viên</h2>
    </div>
    <?php
    if(isset($err)){
        ?>
        <p style="color:red">
            <i class="fa fa-warning"></i>&nbsp;<?php echo $err;?>
        </p>
    <?php
    }

    ?>
    <?php
    $style = array(
        'class' => 'form-control'
    );
    echo form_open('admin_nhanvien/themnhanvien');
    ?>
    <table class="table table-bordered table-hover" style="margin-top: 15px">
        <tr>
            <td class="text-center">STT</td>
            <td class="text-center">Tài khoản</td>
            <td class="text-center">Tên nhân viên</td>
            <td class="text-center">Ca làm việc</td>
            <td class="text-center">Chức năng</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="text" class="form-control" name="account" required>
            </td>
            <td>
                <input type="text" class="form-control" name="name" required>
            </td>
            <td>
                <select name="ca" id="" class="form-control">
                    <option value="Ca sáng">Ca sáng</option>
                    <option value="Ca chiều">Ca chiều</option>
                    <option value="Ca tối">Ca tối</option>
                </select>
            </td>
            <td>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    &nbsp; Thêm mới
                </button>
            </td>
<?php echo form_close()?>
        </tr>
        <?php
        if(isset($nhanvien)){
            $i = 1;
            foreach ($nhanvien as $row){
        ?>
        <?php echo form_open('admin_nhanvien/update_nhanvien/'.$row->id) ?>
        <tr>
            <td class="text-center">
                <?php echo $i; ?>
            </td>
            <td><?php echo $row->account?></td>
            <td><?php echo $row->name?></td>
            <td>
                <select name="suaca" id="" class="form-control">
                    <?php
                    switch ($row->ca){
                        case "Ca sáng":
                            ?>
                            <option value="Ca sáng" selected >Ca sáng</option>
                            <option value="Ca chiều">Ca chiều</option>
                            <option value="Ca tối">Ca tối</option>
                            <?php
                            break;
                        case "Ca chiều":
                            ?>
                            <option value="Ca sáng" >Ca sáng</option>
                            <option value="Ca chiều" selected>Ca chiều</option>
                            <option value="Ca tối">Ca tối</option>
                            <?php
                            break;
                        case "Ca tối":
                            ?>
                            <option value="Ca sáng" >Ca sáng</option>
                            <option value="Ca chiều">Ca chiều</option>
                            <option value="Ca tối" selected>Ca tối</option>
                            <?php
                            break;
                        default:
                            ?>
                            <option value="1">Sandal</option>
                            <option value="2">Pumps</option>
                            <option value="3">Sport Shoes</option>
                            <?php
                    }
                    ?>
                </select>
            </td>
            <td>
                <button type="submit" class="btn btn-info">
                    <i class="fa fa-save"></i>
                </button>
                <?php echo form_close()?>
                <a href="<?php echo base_url()?>admin_nhanvien/delete_nhanvien/<?php echo $row->id?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa nhân viên <?php echo $row->name?> ?')"><i class="fa fa-remove"></i></a>
            </td>
        </tr>
        <?php
                $i++;
            }
        }
        ?>
        <tr>

        </tr>
    </table>

</section>
<?php  include 'footer.php';?>
