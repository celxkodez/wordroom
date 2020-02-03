<?php
ini_set('upload_max_filesize', '100M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 3000);
ini_set('max_execution_time', 3000);

require 'core/auth/auth.php';


// die(var_dump(($_SERVER)));

// if user have session is stated and user has a 
// valid session, it returns admin panel
session_start();
if(isset($_SESSION['user']['status'])){
  $userStatus = $_SESSION['user'];
  // die(var_dump($userStatus));
}else {
  header('location:login.php');
  exit();
}


if(isset($_POST['logout'])){
  // die();

  
  $_SESSION['user'] = ['all'=> 0, 'status'=> false];
  // die(var_dump($_SESSION['user']));
  session_destroy();
  session_unset();
}

require 'postclass.php';

$addpost = new Post(require 'core/bootstrap.php');

if(isset($_POST['image-post'])){


  $storageDirectory = "public/images/" . basename($_FILES["image"]["name"]);

  $postBody = $_POST['image_text_box'];

  $post_type = 'text';

// $addpost->addPost('post title', 'message body herer', 'url and here');
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $storageDirectory)) {
    // echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    $addpost->addPost('NULL', $postBody, $storageDirectory, $post_type);
    header('location:/admin.php?status=successful');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}



if(isset($_POST['audio-post'])){


  $storageDirectory = "public/audios/" . basename($_FILES["audio"]["name"]);

  $postBody = $_POST['audio_text_box'];

  $post_type = 'audio';
  // header('location:/admin?status=successful');
  // die();
  //image

// $addpost->addPost('post title', 'message body herer', 'url and here');
  if (move_uploaded_file($_FILES["audio"]["tmp_name"], $storageDirectory)) {
    // echo "The file ". basename( $_FILES["audio"]["name"]). " has been uploaded.";
    $addpost->addPost('NULL', $postBody, $storageDirectory, $post_type);
    header('location:/admin.php?status=successful');
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}


if(isset($_POST['video-post'])){


  $storageDirectory = "public/videos/" . basename($_FILES["video"]["name"]);

  $postBody = $_POST['video_text_box'];

  $post_type = 'video';

  die(var_dump($storageDirectory));

  // die(var_dump($_FILES["video"]));
// $addpost->addPost('post title', 'message body herer', 'url and here');
  if (move_uploaded_file($_FILES["video"]["tmp_name"], $storageDirectory)) {
    // echo "The file ". basename( $_FILES["video"]["name"]). " has been uploaded.";
    $addpost->addPost('NULL', $postBody, $storageDirectory, $post_type);
    header('location:/admin.php');
    exit();
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

}


require 'resources/views/admin/admin.php';
// if($_SESSION['status']['status']) {
 
//   require 'resources/views/admin/admin.php';
// } else {
//   require 'resources/views/admin/login.php';
// }

