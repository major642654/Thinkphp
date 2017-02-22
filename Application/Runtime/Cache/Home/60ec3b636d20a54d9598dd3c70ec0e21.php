<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <style>
        ul{
            list-style: none;
        }
        H3{
            text-align: center;
        }
        ul{
            margin: 100px 0px 0px 50px;
        }
        li{
            margin-top: 50px;
        }
    </style>
    <title></title>
</head>
<body>
<h3>欢迎 <?php echo ($admin_info['AdminName']); ?> 使用本系统</h3>
<ul>
    <li>上次登录时间： <?php echo ($admin_info['LastLoginTime']); ?></li>
    <li>上次登录IP： <?php echo ($admin_info['LastLoginIP']); ?></li>
</ul>
</body>
</html>