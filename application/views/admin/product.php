<?php
include'header_admin.php'
?>
<div class="row centerpro">
    <?php
    if(isset($data_edit)){
        foreach($data_edit as $item){};
        ?>
        <div class="form-group col-md-6">
            <img src="<?php echo base_url()?>/public/img/product/<?php echo $item->img?>" alt="<?php echo $item->name?>" width="350px" height="400px">
        </div>
        <?php
        $style = array(
            'class' => 'form-group col-md-4',
            'entype' =>'multipart/form-data',
        );
        echo form_open('adminproduct/edit',$style);
        ?>
        <div class="form-group">
            <fieldset>
                <legend><b>Form Edit</b></legend>
                <?php
                if(isset($err)) {
                    ?>
                    <div class="form-group err">
                        <p><b><?php echo $err?></b></p>
                    </div>
                    <?php
                }
                ?>
                <div class="form-group">
                    <b>ID</b>
                    <input type="number" name="id" class="form-control" value="<?php echo $item->id?>" readonly>
                </div>
                <div class="form-group">
                    <b>Name Product:</b>
                    <input type="text" name="name" value="<?php echo $item->name?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <b>File Img:</b>
                    <input type="file" name="userfile">
                </div>
                <div class="form-group">
                    <b>Price Product:</b>
                    <input type="number" name="price" value="<?php echo $item->price?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <b>Number Product:</b>
                    <input type="number" name="number" value="<?php echo $item->number?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <b>Catalog:</b>
                    <select name="catalog" id="" class="form-control">
                        <?php
                        switch ($item->catalog){
                            case 1:
                                ?>
                                <option value="1" selected>Sandal</option>
                                <option value="2">Pumps</option>
                                <option value="3">Sport Shoes</option>
                                <?php
                                break;
                            case 2:
                                ?>
                                <option value="1">Sandal</option>
                                <option value="2" selected>Pumps</option>
                                <option value="3">Sport Shoes</option>
                                <?php
                                break;
                            case 3:
                                ?>
                                <option value="1">Sandal</option>
                                <option value="2">Pumps</option>
                                <option value="3" selected>Sport Shoes</option>
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
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </fieldset>
        </div>
        <?php
        echo form_close();
    }
    ?>
    <?php
    if(isset($product)){
    ?>
    <div class="col-md-12">
        <table class="table table-hover tb_product">
            <h3><b>Danh sách sản phẩm</b></h3>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Ngày đăng</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Giá <sup>VND</sup></th>
                <th>Số lượng</th>
                <th>Danh mục</th>
                <th>
                    <a href="<?php echo base_url()?>addproduct" class="btn btn-primary form-control">
                        <span class="glyphicon glyphicon-pencil"></span>
                        &nbsp;
                        Thêm mới
                    </a>
                </th>
            </tr>
            <?php
            foreach($product as $item){
                ?>
                <tr>
                    <td><?php echo $item->id;?></td>
                    <td><?php echo $item->date?></td>
                    <td>
                        <img src="<?php echo base_url()?>public/img/product/<?php echo $item->img?>" alt="<?php echo $item->name?>">
                    </td>
                    <td><?php echo $item->name;?></td>
                    <td><?php echo number_format($item->price);?></td>
                    <td><?php echo $item->number?></td>
                    <td>
                        <?php
                        switch($item->catalog){
                            case 1:
                                echo 'Sandal';
                                break;
                            case 2:
                                echo 'Pumbs';
                                break;
                            case 3:
                                echo 'Sport Shoes';
                                break;
                            default:
                                echo '';
                                break;
                        }
                        ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url()?>adminproduct/product/<?php echo $item->id?>" class="btn btn-success edit" title="Sửa thông tin sản phẩm">
                            <span class="glyphicon glyphicon-cog"></span>
                        </a>
                        <a href="<?php echo base_url()?>adminproduct/delete/<?php echo $item->id?>" class="btn btn-danger delete" title="Xóa thông tin sản phẩm">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
                <?php
            }
            }
            ?>
        </table>
        <div class="col-sm-12 text-center">
            <ul class="pagination">
                <?php
                if(isset($fullpage)) {
                    for ($page = 1; $page <= $fullpage; $page++) {
                        ?>
                        <li>
                            <a href="<?php echo base_url()?>adminproduct/page/<?php echo $page?>"><?php echo $page ?></a>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div>
<?php
include'footer.php'
?>
