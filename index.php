<?php
$controller = isset($_GET['c']) ? $_GET['c'] : 'siakad';
$method = isset($_GET['m']) ? $_GET['m'] : 'index';

require 'controller/'.$controller.'.php';

$obj_controller = new $controller;

call_user_func_array(array($obj_controller, $method), array());
?>