<?php
$database = require 'core/bootstrap.php';

$allPost = $database->selectAll('post');

$allPost = array_reverse($allPost);




require 'resources/views/videopost.php';