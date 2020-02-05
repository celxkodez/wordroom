<?php
ini_set('upload_max_filesize', '100M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 3000);
ini_set('max_execution_time', 3000);

// for the database. do not remove 
$database = require 'core/bootstrap.php';



//echo trim($_SERVER['REQUEST_URI'], '/' );




require Router::load( 'routes.php')
          ->direct(Request::uri(), Request::method() );