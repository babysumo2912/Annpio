<?php
$name = $this->session->userdata('name');
$login = $this->session->userdata('login');
if(!isset($count_hoadon)){
    $count_hoadon = 0;
}
if(!isset($count_mess)){
    $count_mess = 0;
}
?>
<?php
include'header_admin.php';
?>
<div class="row centerpro">
    <div class="col-md-4"></div>
    <?php
    $style = array(
        'class' => 'form-group col-md-4',
        'enctype' => 'multipart/form-data'
    );
    echo form_open('addproduct/addnew',$style)
    ?>
    <fieldset>
        <legend>Thêm mới sản phẩm</legend>
        <?php
        if(isset($error)){
            ?>
            <div class="form-group">
                <b style="color: red"><?php echo $error?></b>
            </div>
            <?php
        }
        ?>
        <div class="form-group">
            <input type="file" name="userfile" required>
        </div>
        <div class="form-group">
            <input type="text" name="name" placeholder="Product's name ..." class="form-control" required>
        </div>
        <div class="form-group">
            <input type="number" name="price"  min="1" placeholder="Product's price ..." class="form-control" required>
        </div>
        <div class="form-group">
            <input type="number" name="number" min="1" placeholder="Product's number ..." class="form-control" required>
        </div>
        <div class="form-group">
            <select name="catalog" class="form-control" required>
                <option value="1">Sandal</option>
                <option value="2">Pumps</option>
                <option value="3">Sport Shoes</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="add" class="form-control btn btn-primary" value="Add New Product">
        </div>
    </fieldset>
    <?php
    echo form_close();
    ?>
</div>
<div>
<?php
include 'footer.php';
?>
