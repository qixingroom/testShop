<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>addNews</title>
</head>
<body>
<form action="/testShop/testShop/index.php/Admin/News/addNews" method="post">
    <table>
        <tr>
            <td><input type="text" name="newstitle"></td>
        </tr>
        <tr>
            <td><textarea name="newscontext"></textarea></td>
        </tr>
        <tr>
            <td> <input type="submit" value="添加"></td>
        </tr>
    </table>



</form>
</body>
</html>