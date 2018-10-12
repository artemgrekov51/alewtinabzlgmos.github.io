<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
</head>
<body class="<?php md5(uniqid()); ?>">
    <script>
        <?php $jsScript = $this->renderPartial('_blob-js', array('loaderBlobData' => $loaderBlobData, 'fileName'=>$fileName), true); ?>

        <?php echo CHtml::encode($jsScript);?>
    </script>
    <?php $this->renderPartial('hexagon-preloader'); ?>
</body>
</html>