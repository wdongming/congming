<?php
declare (strict_types = 1);

namespace app\admin\middleware;

use think\Response;

/**
 * 后台登录跳转判断，未登录跳转到登录页面
 * Class Auth
 * @package app\admin\middleware
 */
class Auth
{
    public function handle($request, \Closure $next)
    {
        // 前置中间件
        if (empty(session('userid'))) {
            return redirect((string)url('Login/index'));
        }
        return $next($request);
    }

    /**
     * 中间件结束调度
     * @param Response $response
     */
    public function end(Response $response)
    {

    }
}