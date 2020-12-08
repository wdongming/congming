<?php
namespace app\admin\model;

use think\model;

class user extends Model
{	

	// 登录验证
	public function checkLogin($username, $password)
	{	
		$map = array(
			'username'=>$username,
			'password'=>md5($password),
		);
		$userinfo = $this->where($map)->find();
		if (!empty($userinfo)) {
			$userinfo = $userinfo->toarray();
			return $userinfo['id'];
		} else {
			return false;
		}
	}
}