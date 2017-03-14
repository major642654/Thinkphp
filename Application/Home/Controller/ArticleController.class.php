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
            $p = intval($_GET['p']) ? intval($_GET['p']) : '1';
            $pageSize = 10;
            $offset = ($p -1) *$pageSize;
            $list = $product->where('isHide=1')->field('*')->order('update_time desc')->limit($offset,$pageSize)->select();
            /*echo $product->getLastSql();
            dump($list);*/
            $this->assign('list',$list);
            $count = $product->where('isHide=1')->field('*')->count();
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
    /*public function search()
    {
        $keyword = $_POST['search'];
        $product = M('product');
        $data['product_id'] = array('like','%'.$keyword.'%');
        $list = $product->where($data)->select();
        dump($list);
        $this->assign('list',$list);
        //$this->display('product');
        if($list)
        {
            $this->ajaxReturn($list,'查询成功！',1);
        }
        else
        {
            $this->ajaxReturn($list,'查询失败!',0);
        }

    }*/
    public function edit()
    {
        if(is_login())
        {
            $id = $_GET['id'];
            $time = date('Y-m-d H:i:s',time());
            $this->assign('time',$time);
            $this->assign('id',$id);
            $this->display();
        }
        else
        {
            redirect(U('login/index'));
        }
    }
    public function editChange()
    {
        $product = M('product');
        $product->product_name = $_POST['product_name'];
        $product->batch = $_POST['batch'];
        $product->product_info =$_POST['product_info'];
        $product->update_time =$_POST['update_time'];
        $product->state = $_POST['state'];
        $success = $product->where("product_id='".$_POST['ID']."'")->save();
        $this->redirect('product');
//        $id = $_POST['ID'];
//        $batch= $_POST['batch'];
//        $product_name =$_POST['product_name'];
//        $product_info =$_POST['product_info'];
        //echo $id,$product_name,$batch,$product_info;
    }
   public function delete()
   {
       $data['isHide'] = 0;
       $success = M('product')->WHERE("product_id='".$_GET['id']."'")->save($data);
       $this->redirect('product');
       //echo M('product')->_sql();
   }
    public function deleteAll()
    {
        $prodect = M('product');
        $id = $_POST['id'];
        $data['isHide'] =0;
        if(is_array($id))
        {
            $where = 'product_id in ('.implode(',',$id).')';
        }
        else
        {
            $where =  'product_id='.$id;
        }
        $success = $prodect->where($where)->save($data);
        $this->redirect('product');
    }
    public function transport()
    {
        if(is_login())
        {
            $transport = M('transport');
            $p = intval($_GET['p']) ? intval($_GET['p']) : '1';
            $pageSize = 10;
            $offset = ($p -1) *$pageSize;
            $list = $transport->field('*')->order('dispatch_date desc')->limit($offset,$pageSize)->select();
            /*echo $transport->getLastSql();
            dump($list);*/
            $this->assign('list',$list);
            $count = $transport->where('isHide=1')->field('*')->count();
            $Page       = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
            $show       = $Page->show();// 分页显示输出
            $this->assign('page',$show);// 赋值分页输出
            //$this->display(); // 输出模板
            $this->display();
        }
       else{
           redirect(U('login/index'));
       }
    }
}