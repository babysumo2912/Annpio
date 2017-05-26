<?php
include'header_admin.php';

?>
<section class="hdadmin">
    <h2 class="text-center">Bảng danh sách khách hàng</h2>
    <?php if(isset($user)){
        ?>
        <table class="table table-hover">

            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            foreach ($user as $itemp){
                ?>
                <tr>
                    <td><?php echo $itemp->id ?></td>
                    <td><?php echo $itemp->email ?></td>
                    <td><?php echo $itemp->name ?></td>
                    <td><?php echo $itemp->phone ?></td>
                    <td><?php echo $itemp->address ?></td>
                    <td>
                        <a href="<?php echo base_url()?>admin/delete/<?php echo $itemp->id?>" class="btn btn-danger" title="Delete User">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
    }
    ?>
</section>
<?php
include'footer.php';
?>
