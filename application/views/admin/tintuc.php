<?php
/**
 * Created by PhpStorm.
 * User: DucAnn
 * Date: 2017-05-30
 * Time: 5:12 PM
 */
include'header_admin.php';
?>
<section class="max">
    <?php echo form_open('admin_tintuc/add')?>
    <div style="margin-bottom: 10px">
        <button class="btn btn-success" type="submit">
            <i class="fa fa-save"></i>
            &nbsp; Lưu
        </button>
    </div>
    <textarea class="tinymce" name="news"></textarea>
    <?php echo form_close()?>
</section>
<?php
include'footer.php';
?>
