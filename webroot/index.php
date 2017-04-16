<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once (ROOT.DS.'lib'.DS.'init.php');

$uri = $_SERVER['REQUEST_URI'];

App::run($uri);