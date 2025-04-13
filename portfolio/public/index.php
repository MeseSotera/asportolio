<?php 

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$path = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$root = str_replace("index.php", "",$path);

define('ROOT', $root);
define('ASSETS', $root . "assets/");


include "../app/init.php";

$router = new Router();