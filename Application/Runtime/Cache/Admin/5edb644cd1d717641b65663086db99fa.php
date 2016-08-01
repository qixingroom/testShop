<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>

    <?php foreach($newtitles as $v): ?>
    <tr>
        <td><?php echo $v['id']?></td>
        <td><?php echo $v['newstitle']?></td>
        <td><a href="<?php echo U('editNew?id='.$v['id'])?>">修改</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>