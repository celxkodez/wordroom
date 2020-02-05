<?php
require 'download.php';
$database = require 'core/bootstrap.php';

$allPost = $database->selectAll('post');

$allPost = array_reverse($allPost);

$videoPost = array_filter($allPost, function( $allPost ){

    return $allPost->post_type == 'video';
});


require 'resources/views/videopost.php';