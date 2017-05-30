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
            <td class="text-center">Mật khẩu</td>
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
                <input type="password" class="form-control" name="password" required>
            </td>
            <td>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i>
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
        <tr>
            <td class="text-center">
                <?php echo $i; ?>
            </td>
            <td><?php echo $row->account?></td>
            <td><?php echo $row->name?></td>
            <td>************</td>
            <td>
                <a href="" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                <a href="" class="btn btn-danger"><i class="fa fa-remove"></i></a>
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
