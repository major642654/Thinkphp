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
  <div class="panel-head"><strong><span class="icon-key"></span> 修改会员密码</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="">
      <div class="form-group">
        <div class="label">
          <label >管理员帐号：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo ($username); ?>
          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label >原始密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="mpass" name="mpass" size="50" placeholder="请输入原始密码" data-validate="required:请输入原始密码" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label >新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="newpass" name="newpass" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label >确认新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="renewpass" name="renewpass" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#newpass:两次输入的密码不一致" />
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button id="submit" class="button bg-main icon-check-square-o" type="submit" onclick="return sub()"> 提交</button>
        </div>
      </div>      
    </form>
  </div>
</div>
<script>


     function  sub(){
      var mpass = $("#mpass").val();
      var newpass =$('#newpass').val();
      var renewpass= $('#renewpass').val();
      if(mpass===newpass)
      {
        alert("原始密码和新密码不能一样");
      }
      else if(newpass===renewpass)
      {
        $.ajax({
          url:"<?php echo U('login/ajax_get_password');?>",
          data:{mpass:mpass,newpass:newpass},
          type:'post',
          dataType:'json',
          success:function(res){
            if(res.code ==1)
            {
                alert("修改密码成功，请重新登录");
                parent.location.reload();
                return true;
            }
            else{
              alert("原始密码不对，请重新输入");
              return false;
            }
          }
        })
      }

    }



</script>
</body>
</html>