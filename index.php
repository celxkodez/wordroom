<?php


$database = require 'core/bootstrap.php';

$_SERVER["SCRIPT_NAME"] = "/index.php" ;


//echo trim($_SERVER['REQUEST_URI'], '/' );




require Router::load( 'routes.php')
          ->direct(Request::uri(), Request::method() );