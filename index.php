<?php
ini_set('display_errors', '1');
error_reporting(E_STRICT | E_ALL ^ E_NOTICE);

require_once 'app/Router.php';
require_once 'app/Controller.php';
require_once 'app/Model.php';
require_once 'app/View.php';

$router = new Router();
