<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;
use think\facade\Request;
use think\facade\Session;

use app\admin\model\user;

class Login
{	
	// 登录页面
    public function index()
    {	
		return View::fetch('index');
    }

    // 用户登录
    public function dologin()
    {	
    	$req = Request::param();
    	$username = trim($req['username']);
    	$password = trim($req['password']);

    	$user_model = new user();
    	$is_login = $user_model->checkLogin($username, $password);
    	if ($is_login) {
    		Session::set('userid', $is_login);
        	Session::set('username', $username);
        	$res = array(
        		'status'=>1,
        		'msg'=>'登录成功！',
        	);
            return json_encode($res);
    	} else {
    		$res = array(
        		'status'=>0,
        		'msg'=>'用户名或密码错误！',
        	);
    		return json_encode($res);
    	}
    }

    // 用户退出
    public function loginOut() {
        Session::clear();
        return true;
    }
}
