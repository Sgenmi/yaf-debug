<?php

/**
 * Created by IntelliJ IDEA.
 * Author: sgenmi
 * Date: 2021/3/4 上午11:16
 * Email: 150560159@qq.com
 */

class Web extends \Yaf\Controller_Abstract
{
    protected $_m;

    protected $_c;

    protected $_a;

    public function init()
    {
        $this->_m = strtolower($this->getRequest()->getModuleName());
        $this->_c = strtolower($this->getRequest()->getControllerName());
        $this->_a = strtolower($this->getRequest()->getActionName());
        \Yaf\Dispatcher::getInstance()->disableView();
    }

}