<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>后台登录</title> 
<link href="<?php echo (SOURCE); ?>/admin/css/login.css" type="text/css" rel="stylesheet">
</head> 
<body> 

<div class="login">
    <div class="message">家禽防伪后台登录</div>
    <div id="darkbannerwrap"></div>
    
    <form action="<?php echo U('login/login_check');?>" method="post">
		<input name="action" value="login" type="hidden">
		<input name="username" placeholder="用户名" required="" type="text">
		<hr class="hr15">
		<input name="password" placeholder="密码" required="" type="password">
		<hr class="hr15">
		<input value="登录" style="width:100%;" type="submit">
		<hr class="hr20">
		<!-- 帮助 <a onClick="alert('请联系管理员')">忘记密码</a> -->
	</form>

	
</div>



</body>
</html>