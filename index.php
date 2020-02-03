<?php


$database = require 'core/bootstrap.php';

$_SERVER["SCRIPT_NAME"] = "/index.php" ;
$_SERVER["HOME"] = "app/index.php" ;
$_SERVER["HTTP_CONNECTION"] = "keep-alive";
$_SERVER["HEROKU_APP_DIR"] = "/app/index.php" ;
$_SERVER["PWD"] = "/app/index.php";
$_SERVER["DOCUMENT_ROOT"] = "/app/index.php";


//echo trim($_SERVER['REQUEST_URI'], '/' );




require Router::load( 'routes.php')
          ->direct(Request::uri(), Request::method() );