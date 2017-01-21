<?php
ini_set('display_errors', '1');
error_reporting(E_STRICT | E_ALL ^ E_NOTICE);

require 'app/Router.php';
require 'app/Controller.php';

$router = new Router();
