<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo (SOURCE); ?>/admin/css/show_article.css"/>
    <script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/jquery.min.js" ></script>
    <title></title>
</head>
<body>
<form class="article_form" action="<?php echo U('article/show_article');?>" method="post">
    <label class="" for="parent_sort">选择父分类</label>
    <select name="parent_sort" id="parent_sort" class="sort" _href="<?php echo U('article/get_child_sort');?>">
        <?php if(is_array($parent_sorts)): $i = 0; $__LIST__ = $parent_sorts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$parent_sort): $mod = ($i % 2 );++$i; if($parent_sort['sortid'] != $p_sort): ?><option value="<?php echo ($parent_sort['sortid']); ?>"><?php echo ($parent_sort['sortname']); ?></option>
                <?php else: ?><option value="<?php echo ($parent_sort['sortid']); ?>" selected="selected"><?php echo ($parent_sort['sortname']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <label class="article_label" for="parent_sort">选择子分类</label>
    <select name="child_sort" id="child_sort" class="sort">
        <?php if(is_array($child_sorts)): $i = 0; $__LIST__ = $child_sorts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child_sort): $mod = ($i % 2 );++$i; if($child_sort['sortid'] != $c_sort): ?><option value="<?php echo ($child_sort['sortid']); ?>"><?php echo ($child_sort['sortname']); ?></option>
                <?php else: ?><option value="<?php echo ($child_sort['sortid']); ?>" selected="selected"><?php echo ($child_sort['sortname']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </select>
    <input type="submit" value="确定该选项"/>
    </form>

<div name="show_article" class="show_article">
    <ul>
        <li class="title table_head">标题</li>
        <li class="author table_head">来源</li>
        <li class="date table_head">日期</li>
        <!--<a href=""></a>-->
    </ul>
    <?php if(is_array($news_info)): $i = 0; $__LIST__ = $news_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?><ul>
            <li class="title"><a href="<?php echo U('article/add_article_form','id='.$news['id']);?>"><?php echo ($news['title']); ?></a></li>
            <?php if($news['source'] == ''): ?><li class="author" style="text-align: center">本站原创</li>
                <?php else: ?>
                <li class="author" style="text-align: center" ><?php echo ($news['source']); ?></li><?php endif; ?>

            <li class="date"><?php echo ($news['add_time']); ?></li>
            <a  _href="<?php echo U('article/article_delete', 'id='.$news['id']);?>" href="javascript:void(0)" class="delete">删除</a>
        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="page"><?php echo ($page); ?></div>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/article/article.js" ></script>
<script type="text/javascript" src="<?php echo (SOURCE); ?>/admin/js/article/delete.js" ></script>
</body>
</html>