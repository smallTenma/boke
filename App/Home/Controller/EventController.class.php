<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28 0028
 * Time: 下午 17:32
 */

namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class EventController extends Controller
{
    public function code(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 50;
        $Verify->useCurve =false;
        $Verify->entry();
    }

    //登陆时的密码验证和验证码验证
    public  function login(){
        if(IS_POST){
            $Verify = new \Think\Verify();
            $code=I('post.ycode');
            $username=I('post.username');
            $this->assign('username',$username);
            if($Verify->check($code)){

                $password=I('post.password');
                $model=M('tb_user');
                $res=$model->where("usernameid=$username")->select();
                if($res[0]["usernameid"]==$username){
                    if($res[0]["password"]==$password){
                        $this->redirect('Index/index');
                    }else{
                        $this->assign('error2','密码错误');
                        $this->display('Index/login');
                    }
                }else{
                    //$this->error('用户名不存在');
                    $this->assign('error1','用户名不存在');
                    $this->display('Index/login');
                }
            }else{
                //echo U(index/login);
                //$this->error('验证码错误','',1);
                $this->assign('error3','验证码错误');
                $this->display('Index/login');
            }

        }
    }
}