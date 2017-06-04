<?php
include'header_admin.php'

?>
<section class="row max">
    <div class="col-xs-6">
        <?php
        if(isset($err)){
        ?>
        <p style="color: red">
            <i class="fa fa-warning"></i>
            <?php echo $err;?>
        </p>
        <?php
        }
        ?>
        <caption><h3>Bảng quản lí danh mục</h3></caption>
        <table class="table table-bordered table-hover">
            <tr>
                <td>STT</td>
                <td>Mã danh mục</td>
                <td>Tên danh mục</td>
                <td>Chức năng</td>
            </tr>
            <tr>
                <?php
                $style=array(
                    'class'=>'form-group',
                    );
                echo form_open('danhmuc_admin/add');
                ?>
                <td></td>
                <td>
                    <input type="text" name="madanhmuc" required class="form-control">
                </td>
                <td>
                    <input type="text" name="tendanhmuc" required class="form-control">
                </td>
                <td>
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                        &nbsp; Thêm mới
                    </button>
                </td>
                <?php
                echo form_close();
                ?>
            </tr>
            <?php
            if(isset($catalog)){
                $i = 1;
                foreach ($catalog as $dm){
            ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $dm->madanhmuc?></td>
                <td><?php echo $dm->name?></td>
                <td>
                    <a href="<?php echo base_url()?>danhmuc_admin/view/<?php echo $dm->madanhmuc?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo base_url()?>danhmuc_admin/xoa/<?php echo $dm->madanhmuc?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa mã danh mục <?php echo $dm->madanhmuc?> - <?php echo $dm->name?> không ?')"><i class="fa fa-remove"></i></a>
                </td>
            </tr>
            <?php
                    $i++;
                }
            }
            ?>
        </table>
    </div>
    <div class="col-xs-6">
        <?php
        if(isset($view_catalog)){
            foreach ($view_catalog as $ctdm){};
            $style = array(
                'class' => 'form-group',
            );
            echo form_open('danhmuc_admin/update/'.$ctdm->madanhmuc,$style);
        ?>
        <fieldset>
            <legend><h3>Chi Tiết Danh Mục</h3></legend>
            <div class="form-group">
                <label for="">Mã danh mục: <?php echo $ctdm->madanhmuc?></label>
            </div>
            <div class="form-group">
                <label for="">Tên danh mục: </label>
                <input type="text" class="form-control" value="<?php echo $ctdm->name?>" name="tendanhmuc">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-warning">
                    <i class="fa fa-save"></i>
                    &nbsp; Lưu
                </button>
            </div>
        </fieldset>
        <?php
        }

        ?>
    </div>
</section>
<?php
include 'footer.php'
?>
