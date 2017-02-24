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
<form method="post" action="<?php echo U('article/deleteALl');?>">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 生产管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red" onclick="return del()"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
          <!--<li style="float: right">
              <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
              <a  id="search" name="search" href="<?php echo U('article/search');?>" class="button border-main icon-search"  > 搜索</a></li>-->
      </ul>

    </div>



    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>产品名称</th>
        <th>批次</th>
        <th>创建时间</th>
        <th>更新时间</th>
        <th width="20%">产品信息</th>
        <th width="120">状态</th>
        <th valign="center">操作</th>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><input type="checkbox" name="id[]" value='<?php echo ($vo["product_id"]); ?>' />
          <?php echo ($vo["product_id"]); ?></td>
        <td><?php echo ($vo["product_name"]); ?></td>
        <td><?php echo ($vo["batch"]); ?></td>
        <td><?php echo ($vo["create_time"]); ?></td>
        <td><?php echo ($vo["update_time"]); ?></td>
        <td><?php echo ($vo["product_info"]); ?></td>
        <td><?php echo ($vo["state"]); ?></td>
          <td><div class="button-group"><a type="button" class="button border-main" href="<?php echo U('article/edit','id='.$vo['product_id']);?>"><span class="icon-edit"></span>修改</a></div>
          <div class="button-group"> <a class="button border-red"  href="<?php echo U('article/delete','id='.$vo['product_id']);?>" onclick="return del()"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>

  </div>
  <div class="pagelist"><?php echo ($page); ?></div>
</form>
<script type="text/javascript">

function del(){
	if(confirm("您确定要删除吗?")){
        /*$.ajax({
            type:'GET',
            url: $(this).attr("_href"),
            dataType: 'text',
            success:function(data){
                if(data == 0){
                    alert("删除失败");
                }else{
                    alert("删除成功");
                    window.location.reload();
                }
            },
            error:function(){
                alert("删除失败");
            }
        })*/
        return true;
	}
    else
    {
        return false;
    }
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})
/*$("#search").click(function () {
    $.ajax({
        type:'post',
        url:"<?php echo U('article/search');?>",
        success: function (data) {
            if(data.state == 1)
            {
                alert("12");
            }
            else {
                alert("11");
            }
        }
    })
})*/

</script>
</body></html>