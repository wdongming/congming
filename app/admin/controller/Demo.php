<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;

class Demo extends BaseController
{
	
    public function index()
    {
        return View::fetch('index');
    }

     public function add()
    {
        return View::fetch('add');
    }

    
}
