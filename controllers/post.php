<?php
require 'download.php';
$database = require 'core/bootstrap.php';

$allPost = $database->selectAll('post');

$allPost = array_reverse($allPost);


// $here = 'here';

// die(var_dump($here));
// die(var_dump($allPost));

require 'resources/views/post.php';