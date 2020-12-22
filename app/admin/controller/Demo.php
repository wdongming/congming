<?php
declare (strict_types = 1);

namespace app\admin\controller;

use think\facade\View;

use app\admin\model\types;
use app\admin\model\demo as demo_model;

class Demo extends BaseController
{
	
    public function index()
    {
        return View::fetch('index');
    }

     public function add()
    {	
    	$types_model = new types();
    	$types_list = $types_model->select();

        return View::fetch('add', array("types_list"=>$types_list));
    }

    public function doInsert() 
    {
    	var_dump($_POST);
    }

    
}
