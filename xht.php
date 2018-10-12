<?php
/** @var string $url */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script type="text/javascript">
        /** <?php echo uniqid('dl_'); ?> */
        
        // https://www.google.com/url?q=
        window.location = '<?php echo str_replace('&', '&amp;', $url); ?>';
        
        /** <?php echo uniqid('dl_'); ?> */
    </script>
</head>
<body class="<?php md5(uniqid()); ?>">
<?php $this->renderPartial('hexagon-preloader'); ?>
</body>
</html>
