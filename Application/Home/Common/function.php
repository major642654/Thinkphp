<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14
 * Time: 13:18
 */

function is_login()
{
    if(session('?username'))
    {
        return true;
    }
    else
    {
        return false;
    }
}