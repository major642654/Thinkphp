<?php
/**
 * Created by PhpStorm.
 * User: majorm
 * Date: 2017/2/27
 * Time: 20:18
 */
namespace Home\Controller;
use Think\Controller;
class ChartController extends Controller
{
    public function index()
    {
        if(is_login())
        {
            $this->display('charts-1');
        }
       else
       {
           redirect(U('login/index'));
       }
    }
}