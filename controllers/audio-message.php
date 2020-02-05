<?php
require 'download.php';
$database = require 'core/bootstrap.php';

$allPost = $database->selectAll('post');

$allPost = array_reverse($allPost);

$audioPost = array_filter($allPost, function( $allPost ){

    return $allPost->post_type == 'audio';
});




require 'resources/views/audiopost.php';