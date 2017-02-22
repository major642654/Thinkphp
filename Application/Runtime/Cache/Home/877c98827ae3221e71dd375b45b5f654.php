<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo (SOURCE); ?>/admin/js/article/upload/control/css/zyUpload.css"/>
    <link rel="stylesheet" href="<?php echo (SOURCE); ?>/admin/css/article_form.css"/>
    <script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/jquery.min.js" ></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (SOURCE); ?>/admin/edit/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (SOURCE); ?>/admin/edit/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致    编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="<?php echo (SOURCE); ?>/admin/edit/lang/zh-cn/zh-cn.js"></script>
    <title></title>
</head>
<body>

<form class="article_form" action="<?php echo U('article/article_add');?>" method="post">
    <div class="sub_form_div">
        <label class="article_label" for="parent_sort">选择父分类</label>
        <select name="parent_sort" id="parent_sort" class="sort" _href="<?php echo U('article/get_child_sort');?>">
            <?php if(is_array($parent_sorts)): $i = 0; $__LIST__ = $parent_sorts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$parent_sort): $mod = ($i % 2 );++$i; if($parent_sort['sortid'] != 19): ?><option value="<?php echo ($parent_sort['sortid']); ?>"><?php echo ($parent_sort['sortname']); ?></option>
                    <?php else: ?><option value="<?php echo ($parent_sort['sortid']); ?>" selected="selected"><?php echo ($parent_sort['sortname']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </select><br/>
        <label class="article_label" for="parent_sort">选择子分类</label>
        <select name="child_sort" id="child_sort" class="sort">
            <?php if(is_array($child_sorts)): $i = 0; $__LIST__ = $child_sorts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child_sort): $mod = ($i % 2 );++$i;?><option value="<?php echo ($child_sort['sortid']); ?>"><?php echo ($child_sort['sortname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select><br/>
        <?php if(isset($news_data)): ?><label class="article_label">标题<input type="text" name="title" class="article_input" value="<?php echo ($news_data['title']); ?>"/></label><br/>
            <label class="article_label">副标<input type="text" name="subtitle" class="article_input" value="<?php echo ($news_data['subtitle']); ?>"/></label><br/>
            <label class="article_label">作者<input type="text" name="source" class="article_input" value="<?php echo ($news_data['source']); ?>"/></label><br/>
            <label class="article_label">日期<input type="date" name="date" class="article_input" value="<?php echo (substr($news_data['add_time'],0,10)); ?>"/></label>
            <input type="hidden" name="id" value="<?php echo ($news_data['id']); ?>"/>
            <?php else: ?>
            <label class="article_label">标题<input type="text" name="title" class="article_input"/></label><br/>
            <label class="article_label">副标<input type="text" name="subtitle" class="article_input"/></label><br/>
            <label class="article_label">作者<input type="text" name="source" class="article_input"/></label><br/>
            <label class="article_label">日期<input type="date" name="date" class="article_input" value="<?php echo (date('Y-m-d',NOW_TIME)); ?>"/></label><?php endif; ?>

    </div>
    <div  id="demo" _href="<?php echo U('article/upload_img');?>" class="demo sub_form_div"></div>
    <input type="hidden" id="indexpic" name="indexpic" value=""/>
    <?php if(isset($news_data)): ?><script id="container" name="content" type="text/plain" class="article_content">
           <?php echo ($news_data['content']); ?>;
        </script>
        <?php else: ?>
        <script id="container" name="content" type="text/plain" class="article_content">
        </script><?php endif; ?>

    <input type="submit" value="确定" class="article_content" style="width:300px;padding:10px;
    border:1px; background: #00A2D4;color: #ffffff; margin-top:20px;clear: left"/>
</form>
    <script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/article/article.js" ></script>
    <script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/article/upload/core/zyFile.js" ></script>
    <script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/article/upload/control/js/zyUpload.js" ></script>
    <script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/article/upload/demo.js" ></script>
<script type="text/javascript">
    var ue = UE.getEditor('container');
</script>
</body>
</html>