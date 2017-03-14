<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/html5.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/respond.min.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo (SOURCE); ?>/admin/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (SOURCE); ?>/admin/css/H-ui.admin.css" />
<!--<link rel="stylesheet" type="text/css" href="<?php echo (SOURCE); ?>/admin/css/iconfont.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo (SOURCE); ?>/admin/css/icheck.css" />
<!--<link rel="stylesheet" type="text/css" href="<?php echo (SOURCE); ?>/admin/css/skin/default/skin.css" id="skin" />-->
<link rel="stylesheet" type="text/css" href="<?php echo (SOURCE); ?>/admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>折线图</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 桌面 <span class="c-gray en">&gt;</span> 系统统计 <span class="c-gray en">&gt;</span> 折线图 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<!--<div class="f-14 c-error">特别声明：Highcharts 是一个用纯 JavaScript编写的一个图表库，仅免费提供给个人学习、个人网站，如果在商业项目中使用，请去Highcharts官网网站购买商业授权。或者您也可以选择其他免费的第三方图表插件，例如百度echarts。H-ui.admin不承担任何版权问题。</div>-->
	<div id="container" style="min-width:700px;height:400px"></div>
</div>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/layer.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/H-ui.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/exporting.js"></script>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: '产品销量折线图',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月']
        },
        yAxis: {
            title: {
                text: '件数'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: '叫花鸡',
            data: [116,225,188,199,256,275,200,70,90,110,120,150]
        }, {
            name: '散养鸭',
            data: [225,168,188,70,90,110,120,150,199,256,275,200]
        }, {
            name: '野山猪',
            data: [256,275,200,90,110,120,150,199,70,90,150,222]
        }, {
            name: '黑天鹅',
            data: [120,150,199,256,200,150,199,170,275,200,260,288]
        }]
    });
});
</script>
</body>
</html>