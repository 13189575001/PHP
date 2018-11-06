<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
/tp2/index.php/Admin<br>
/tp2/index.php/Admin/Test<br>
/tp2/index.php/Admin/Test/test2<br>
/tp2/Public<br>
/tp2/Admin/Test/test2/id/100<br>
__ADMIN__
<hr>
<?php echo ($ar[0]); ?>,<?php echo ($ar[1]); ?>,<?php echo ($ar[2]); ?>,
<?php echo ($ar2[0][0]); ?>,<?php echo ($ar2[0][1]); ?>,<?php echo ($ar2[0][2]); ?>
</body>
</html>