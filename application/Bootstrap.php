<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2021/3/4 上午11:04
 * Email: 150560159@qq.com
 */

class Bootstrap extends \Yaf\Bootstrap_Abstract
{
    private $_config;

    // 配置考备
    public function _initBootstrap()
    {
        $this->_config = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('_config', $this->_config);
    }

    public function _initRoutes(\Yaf\Dispatcher $dispatcher)
    {
        $router = $dispatcher->getRouter();

        //这里用了addRoute 则/role,/main 都不可以访问了，直接502，但/tests 可以访问，去掉addRoute 则都可以访问
        $router->addRoute('45689', new \Yaf\Route\Rewrite('/common', [
            "module" => "index",
            "controller" => "index",
            "action" => "date"
        ]));
        $router->addRoute('456', new \Yaf\Route\Rewrite('/getmenu', [
            "module" => "index",
            "controller" => "index",
            "action" => "getMenu"
        ]));





    }

}
