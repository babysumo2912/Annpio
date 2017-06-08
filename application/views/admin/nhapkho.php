<?php include 'header_admin.php';?>
<section class="padding20 hdadmin">
    <div class = "form_nhap row">
        <div class=" col-xs-5" style="border: 1px #ccc solid; float: left;">
            <?php
            $style = array(
                'class' => 'form-group',
                'enctype' => 'multipart/form-data'
            );
            echo form_open('admin/nhapmoisanpham',$style);
            ?>
            <fieldset>
                <div class="text-center" style="padding: 15px">
                    <b>Nhập thông tin sản phẩm</b>
                    <?php if(isset($err_add)){
                    ?>
                    <p style="color: red">
                        <i class="fa fa-warning"></i>
                        <?php echo $err_add?>
                    </p>
                    <?php
                    }?>
                </div>
                <?php if(isset($check)){
                    foreach($check as $value){}
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
                            <input type="text" name="masanpham" readonly value="<?php echo $value->madanhmuc.' '.$value->id?>" class="form-control"  style="border: none; background: inherit">
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="<?php echo base_url() ?>public/img/product/<?php echo $value->img ?>" alt="" width="100px" height="100px">
                        <?php echo $value->name?> - <?php echo $value->size?>
                    </div>
                    <div class="form-group">
                        <p>Danh mục:<?php echo $getdm->name?></p>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-6">
                            Giá nhập gần nhất:
                        </div>
                        <div class="col-xs-6">
                            <input type="number" min = "1" class="form-control" name="gianhap" value="<?php echo $value->price_nhap?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-6">
                            Giá bán hiện tại:
                        </div>
                        <div class="col-xs-6">
                            <input type="number" min = "1" class="form-control" name="giaban" value="<?php echo $value->price?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-6">
                            Số lượng nhập
                        </div>
                        <div class="col-xs-6">
                            <input type="number" min="1" class="form-control" name="soluong" placeholder="Số lượng ..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            &nbsp; Thêm
                        </button>
                    </div>
                <?php }else{?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm ...">
                    </div>
                    <div class="form-group">
                        <input type="number" min="1" class="form-control" name="gianhap" placeholder="Giá nhập ...">
                    </div>
                    <div class="form-group">
                        <input type="number" min="1" class="form-control" name="giaban" placeholder="Giá bán dự kiến ...">
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
                        <select name="size" id="" class="form-control">
                            <option value="0">Chọn Size</option>
                            <option value="M">M</option>
                            <option value="S">S</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="Free Size">Free Size</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="soluong" placeholder="Số lượng ...">
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
                <?php }?>
            </fieldset>
            <?php echo form_close();?>
        </div>
        <div class="col-xs-5" style="border: 1px #ccc solid; float:right">
            <div class="text-center" style="padding: 15px">
                <b>Sản phẩm trong kho</b>
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
                                    <a href="<?php echo base_url()?>admin/check_sp/<?php echo $item->id?>"><i class="fa fa-check"></i></a>
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
    </div>
</section>
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
        <div class = "right save">
            <a href="<?php echo base_url()?>admin/luupnk" class="btn btn-success" style="font-size: 14px">
                <i class="fa fa-save"></i> Lưu
            </a>
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
            <table class="table table-bordered table-hover">
                <tr>
                    <td>STT</td>
                    <td>Sản Phẩm</td>
                    <td>Giá nhập</td>
                    <td>Danh mục</td>
                    <td>Số lượng</td>
                    <td>Size</td>
                    <td>Thanh toán</td>
                </tr>
                <?php
                echo form_open('admin/capnhap_pnk');
                    $money = 0;
                if(isset($cart)){
                    $i = 1 ;

                    foreach($cart as $row){
                        echo form_hidden('cart[' . $row['id'] . '][id]', $row['id']);
                        echo form_hidden('cart[' . $row['id'] . '][rowid]', $row['rowid']);
                        echo form_hidden('cart[' . $row['id'] . '][name]', $row['name']);
                        echo form_hidden('cart[' . $row['id'] . '][price]', $row['price']);
                        echo form_hidden('cart[' . $row['id'] . '][qty]', $row['qty']);
                    $danhmuc = $this->Home_models->getinfo('tb_catalog','madanhmuc',$row['danhmuc']);
                    if($danhmuc){
                        foreach ($danhmuc as $dm){};
                    }
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td>
                        <img src="<?php echo base_url()?>public/img/product/<?php echo $row['img']?>" alt="" width="50px" height="50px">
                        <?php echo $row['name']?>
                    </td>
                    <td><?php echo number_format($row['price'])?></td>
                    <td><?php echo $dm->name ?></td>
                    <td>
                        <?php
                        $data = array(
                            'type' => 'number',
                            'class' => 'form-control number',
                            'min' => '0',
                            'name' => 'cart[' . $row['id'] . '][qty]',
                            'value' => $row['qty'],
                        );
                        echo form_input($data);
                        ?>
                    <td><?php echo $row['size'] ?></td>
                    <td><?php echo number_format($row['subtotal'])?></td>
                </tr>
                <?php
                        $i++;
                        $money+=$row['subtotal'];
                    }
                }

                ?>
                <tr>
                    <td colspan="6">
                        <b style="float:right">Thanh toán</b>
                    </td>
                    <td>
                        <?php echo number_format($money);?>
                    </td>
                </tr>
            </table>
            <div class="text-right">
                    <input type="submit" name="capnhap" class="btn btn-primary" value="Cập Nhập">
                    <?php echo form_close();?>
            </div>
        </div>
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
