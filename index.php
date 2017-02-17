<?php
// Това е нашият  FRONT CONTROLLER
//Определяне на пътя до главната директория
define("ROOT", dirname(__FILE__));
session_start();
require_once (ROOT . '/components/autoload.php');
$rotes = new Router();
$rotes->run();
