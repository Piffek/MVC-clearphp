<?php
ini_set('display_errors', '1');
error_reporting(E_STRICT | E_ALL ^ E_NOTICE);
require 'model\Model.php';
require 'controllers\Controller.php';
require 'views\View.php';

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	 $controller->{$_GET['action']}();
}

echo $view->output();