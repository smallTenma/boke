<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/4 0004
 * Time: 上午 9:38
 */

namespace Home\Controller;


use Think\Controller;

class PublicController extends Controller
{
    public function base(){
        //echo session("username");
        $this->assign("username",session("username"));
        $this->display("public/base");
    }
}