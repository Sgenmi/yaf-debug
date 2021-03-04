<?php


ini_set('yaf.name_suffix', 0);
ini_set('yaf.name_separator', '\\');
define("BASE_PATH", dirname(__DIR__));
define("APP_PATH", BASE_PATH . '/application');
define("LOG_PATH", APP_PATH . "/log");
define("CONFIG_FILE",APP_PATH."/conf/config.ini");

$app = new \Yaf\Application(CONFIG_FILE);
$app->bootstrap()->run();
