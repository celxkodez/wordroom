<?php


$router->get('contact', 'controllers/contact.php' );
$router->get('about', 'controllers/about.php');
$router->get('admin', 'controllers/admin.php');
$router->get('video-message', 'controllers/video-message.php');
$router->get('', 'controllers/post.php');
$router->get('audio-message', 'controllers/audio-message.php');
$router->get('login', 'controllers/login.php');


$router->post('login', 'controllers/login.php');
$router->post('make-post', 'controllers/make-post.php');
$router->post('admin', 'controllers/admin.php');