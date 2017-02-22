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
            $password = $_POST['password'];
            $user_info = M('admin')->where("username ='".$username."'")->field('password')->find();
            if($user_info['password'] === $_POST['password'])
            {
                session('username',$_POST['username']);
                //redirect(U('article/index'));
                redirect(U('index/index'));
            }
            else{
                redirect(U('login/index'));
            }
        }
    }

}