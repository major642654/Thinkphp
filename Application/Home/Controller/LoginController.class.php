<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14
 * Time: 13:23
 */
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
        $this->display('login');
    }
    public function login_check()
    {
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username = $_POST['username'];
            $password = substr(md5($_POST['password']),8,16);
            $user_info = M('admin')->where("username ='".$username."'")->field('password')->find();
            if($user_info['password'] === $password)
            {
                session('username',$_POST['username']);
                redirect(U('index/index'));
            }
            else{
                redirect(U('login/index'));
            }
        }
    }
    public function pass()
    {
        if(is_login())
        {
            $this->assign('username',session('username'));
            $this->display();
        }
        else
        {
            redirect(U('login/index'));
        }
    }
    public function ajax_get_password()
    {
        if(is_login())
        {
            $admin = M('admin');
            $password = $_POST['newpass'];
            $mpass = $admin->where("username='".session('username')."'")->field('password')->find();
            if($mpass['password'] ===($_POST['mpass']))
            {
                $res['code'] = 1;
                $data['password'] = $password;
                $success = $admin->where("username='".session('username')."'")->save($data);
                session('username',null);
            }
            else
            {
                $res['code'] =0;
            }
            $this->ajaxReturn($res);
        }
    }
}