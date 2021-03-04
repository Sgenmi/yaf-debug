<?php

/**
 * Created by IntelliJ IDEA.
 * User: root
 * Date: 18-4-2
 * Time: 下午12:10
 */
namespace Controller;

class Error extends \Yaf\Controller_Abstract
{

    public function init()
    {
        \Yaf\Dispatcher::getInstance()->disableView();
    }

    public function errorAction($exception)
    {
        $message = $exception->getMessage();

        echo $message;
    }
}
