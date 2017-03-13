<?php
header("content-type:text/html;charset:utf-8");
session_start();
define("ROOT", dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/test".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/fonts".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
require_once 'string_func.php';
require_once 'image_func.php';
require_once 'commont_func.php';
require_once 'mysql_func.php';
require_once 'configs.php';
require_once 'admin_inc.php';
require_once 'page_func.php';
require_once 'doAction.php';