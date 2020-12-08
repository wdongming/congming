<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;

class Index extends BaseController
{
	
    public function index()
    {
        return View::fetch('index');
    }

    public function welcome()
    {
        return View::fetch('welcome');
    }
}
