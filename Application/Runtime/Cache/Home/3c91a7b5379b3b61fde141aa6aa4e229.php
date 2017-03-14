<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="<?php echo (SOURCE); ?>/admin/css/article/pintuer.css">
<link rel="stylesheet" href="<?php echo (SOURCE); ?>/admin/css/article/admin.css">
<script src="<?php echo (SOURCE); ?>/admin/js/article/jquery.js"></script>
<script src="<?php echo (SOURCE); ?>/admin/js/article/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 桌面 > 货运管理 > 货运管理</strong></div>
 <!-- <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加分类</button>
  </div>-->
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">运单号</th>
      <th width="10%">发货日期</th>
      <th width="10%">货物重量</th>
      <th width="10%">发货地址</th>
      <th width="10%">收获地址</th>
      <th width="10%">承运人</th>
      <th width="10%">状态</th>
    </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
      <td><?php echo ($vo["transport_id"]); ?></td>
      <td><?php echo ($vo["dispatch_date"]); ?></td>
      <td><?php echo ($vo["weight"]); ?></td>
      <td><?php echo ($vo["delivery_address"]); ?></td>
      <td><?php echo ($vo["shopping_address"]); ?></td>
      <td><?php echo ($vo["carrier"]); ?></td>
      <td><?php echo ($vo["state"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  </table>

</div>
<div class="pagelist"><?php echo ($page); ?></div>

</body>
</html>