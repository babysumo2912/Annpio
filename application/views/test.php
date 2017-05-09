<?php
?>

<html>
<head>
    <title>AnnPio - Thế giới giày nữ</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/style/css/style.css">
    <link rel="icon" href="<?php echo base_url();?>public/img/logo/icon.png">
    <script src="<?php echo base_url();?>public/style/js/jquery-3.1.0.js"></script>
    <script src="<?php echo base_url();?>public/style/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>public/style/js/filejs.js"></script>
</head>
<body>
    <h1>Test now!</h1>
    <div class="col-md-4">
        <?php
        if(isset($error)){
            echo $error;
        }
        if(isset($add)){
            foreach ($add as $item){
                echo $item->img.'<br>';
            }
        }
        ?>
    </div>
    <?php
    $style = array(
        'class'=>'form-group col-md-4',
        'enctype' =>'multipart/form-data'
    );
    echo form_open('test/upload',$style)
    ?>
    <fieldset>
        <legend>Upload</legend>
        <div class="form-group">
<!--            //bat buoc phai dat ten file la userfile!-->
            <input type="file" name="userfile" size="10">
         </div>
        <div class="form-group">
            <input type="submit" name="upload" value="Upload" class="btn btn-primary" style="margin-left:40%">
        </div>
    </fieldset>
    <?php
    echo form_close();
    ?>
</body>
</html>


