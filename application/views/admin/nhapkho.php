<?php include 'header_admin.php';?>
<section class = "border padding20 hdadmin">
<?php
//    echo form_open();
//
//    ?>
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
            <button type="submit" class="btn btn-success">
                <i class="fa fa-save"></i> Lưu
            </button>
        </div>
    </div>
    <div class = "form_nhap row">
        <div class=" col-xs-5" style="border: 1px #ccc solid; float: left;">
        <?php
        $style = array(
            'class' => 'form-group',
        );
        echo form_open('admin/nhapmoisanpham',$style);
        ?>
        <fieldset>
            <div class="text-center" style="padding: 15px">
                <b>Nhập mới sản phẩm</b>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm ...">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="tensanpham" placeholder="Giá nhập ...">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="tensanpham" placeholder="Giá bán dự kiến ...">
            </div>
            <div class="form-group">
                <select name="danhmuc" id="" class="form-control">
                    <option value="0">Chọn danh mục</option>
                    <?php
                    if(isset($catalog)){
                        foreach($catalog as $dm){
                    ?>
                        <option value="<?php echo $dm->madanhmuc?>"><?php echo $dm->name?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="tensanpham" placeholder="Số lượng ...">
            </div>
            <div class="form-group">
                <input type="file" name="userfile" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-plus"></i>
                    &nbsp; Thêm
                </button>
            </div>
        </fieldset>
        <?php echo form_close();?>
        </div>
        <div class="col-xs-5" style="border: 1px #ccc solid; float:right">
            <div class="text-center" style="padding: 15px">
                <b>Bổ sung sản phẩm</b>
            </div>
            <div>
                <?php if(isset($check)){
                    foreach($check as $value){}
                ?>
                <?php
                $style = array(
                    'class' => 'form-group',
                );
                echo form_open('admin/nhapmoisanpham',$style);
                ?>
                <div class="form-group">
                    <img src="<?php echo base_url() ?>public/img/product/<?php echo $value->img ?>" alt="" width="100px" height="100px">
                    <?php echo $value->name?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="tensanpham" placeholder="Gía nhập ...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="tensanpham" placeholder="Giá bán dự kiến">
                </div>
                <div class="form-group">
                    <select name="danhmuc" id="" class="form-control">
                        <option value="0">Chọn danh mục</option>
                        <?php
                        if(isset($catalog)){
                            foreach($catalog as $dm){
                                ?>
                                <option value="<?php echo $dm->madanhmuc?>"><?php echo $dm->name?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="tensanpham" placeholder="Số lượng ...">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i>
                        &nbsp; Thêm
                    </button>
                </div>
                <?php echo form_close();?>
                <?php }else{?>
            </div>
            <div class="search">
                <?php
                $style = array(
                    'class' => 'form-group',
                );
                echo form_open('admin/searchsp',$style);
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
                <div class="row" style="height:300px;overflow-x: hidden">
                    <table class="table table-hover">
                        <tr>
                            <td></td>
                            <td>Sản phẩm</td>
                            <td>Số lượng tồn</td>
                            <td>Giá bán</td>
                        </tr>
                        <?php
                        foreach ($data_search as $item){
                            ?>
                            <tr>
                                <td>
                                    <a href="<?php echo base_url()?>admin/check_sp/<?php echo $item->id?>"><i class="fa fa-check"></i></a>
                                </td>
                                <td>
                                    <img src="<?php echo base_url()?>public/img/product/<?php echo $item->img?>" alt="" width="50px" height="50px">
                                    <?php echo $item->name?>
                                </td>
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
            <?php }?>
        </div>
    </div>
    <br>
    <div class = "form_nhap row">
        <table class="table table-bordered table-hover">
            <tr>
                <td>STT</td>
                <td>STT</td>
                <td>STT</td>

            </tr>
        </table>
    </div>
<?php
//    echo form_close();
//
//    ?>
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
