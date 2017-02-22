<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
       // $this->display('login');
        if(is_login())
        {
            $this ->assign('username',session('username'));
            $this ->display();
        }
        else
        {
            redirect(U('login/index'));
        }
    }
    public function show_welcome()
    {
        $admin_info = M('admin')->where("username='".session('username')."'")->find();
        $this->assign('admin_info', $admin_info);

        $data['LastLoginIP'] = get_client_ip();
        $data['LastLoginTime'] = date('Y-m-d H:i:s',time());
        M('admin')->where("username='".session('username')."'")->save($data);


        $this->display();
    }
    public function quit()
    {
        session('username', null);
        redirect(U('login/index'));
    }
}