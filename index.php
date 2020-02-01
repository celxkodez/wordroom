<?php

// for the database. do not remove 
$database = require 'core/bootstrap.php';



//echo trim($_SERVER['REQUEST_URI'], '/' );




require Router::load( 'routes.php')
          ->direct(Request::uri(), Request::method() );