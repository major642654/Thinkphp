<?php
/**
 * Created by PhpStorm.
 * User: majorm
 * Date: 2017/2/21
 * Time: 14:47
 */
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller
{
    public function product()
    {
        if(is_login())
        {
            $product = M('product');
            $list = $product->field('*')->order('create_time desc')->page($_GET['p'].',10')->select();
            dump($list);
            $this->assign('list',$list);
            $count = $product->field('*')->count();
            $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
            $show       = $Page->show();// 分页显示输出
            $this->assign('page',$show);// 赋值分页输出
            //$this->display(); // 输出模板
            $this->display();
        }
        else
        {
            redirect(U('login/index'));
        }
    }
}