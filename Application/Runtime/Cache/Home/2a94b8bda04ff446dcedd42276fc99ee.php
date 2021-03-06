<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="<?php echo (SOURCE); ?>/admin/favicon.ico" >
<LINK rel="Shortcut Icon" href="<?php echo (SOURCE); ?>/admin/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/html5.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/respond.min.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/PIE_IE678.js"></script>
<![endif]-->
<link href="<?php echo (SOURCE); ?>/admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (SOURCE); ?>/admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (SOURCE); ?>/admin/css/skin/default/skin.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo (SOURCE); ?>/admin/css/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (SOURCE); ?>/admin/css/style.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>防伪溯源后台系统</title>
<meta name="description" content="后台系统">
</head>
<body>
<header class="Hui-header cl"> <a class="Hui-logo l" title="H-ui.admin v2.3" href="/">防伪溯源</a> <a class="Hui-logo-m l" href="/" title="H-ui.admin">H-ui</a> <span class="Hui-subtitle l"></span>
	<ul class="Hui-userbar">
		<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A"><?php echo ($username); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
			<ul class="dropDown-menu radius box-shadow">
				<li><a href="<?php echo U('index/quit');?>">退出</a></li>
			</ul>
		</li>
	</ul>
	<a aria-hidden="false" class="Hui-nav-toggle" href="#"></a> </header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 生产管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!--<li><a _href="<?php echo U('article/add_article_form');?>" href="javascript:void(0)">添加文章</a></li>-->
					<li><a _href="<?php echo U('article/product');?>" href="javascript:void(0)">生产管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 货运管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="picture-list.html" data-title="货运管理" href="javascript:void(0)">货运管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 用户管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="admin-role.html" href="javascript:void(0)">修改密码</a></li>
					<!--<li><a _href="admin-permission.html" href="javascript:void(0)">权限管理</a></li>-->
					<!--<li><a _href="admin-list.html" href="javascript:void(0)">管理员列表</a></li>-->
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo U('index/show_welcome');?>"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/layer.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/H-ui.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/H-ui.admin.js"></script>
</body>
</html>