<?php

ignore_user_abort(true);
set_time_limit(0);
// $path = 'downloads/';





if(isset($_GET['download_file'])){


  // die(var_dump($_GET['download_file']));

  // $dl_file = preg_replace("([^\w\s\d\-_~,;:\[\]\(\).]|[\.]{2,})", '', $_GET['download_file']);

  $dl_file = $_GET['download_file'];
  // die(var_dump($dl_file));
  $dl_file = filter_var($dl_file, FILTER_SANITIZE_URL);

  $fullPath = $dl_file;


  // die(var_dump($fullPath));



  // die(var_dump($fullPath));

  if($fd = fopen ($fullPath, "r")){

    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);


    // var_dump($fd);
    // die();
    // var_dump($fsize);
    // echo '<br>';
    // die(var_dump($path_parts));
  
    $ext = strtolower($path_parts["extension"]);
  
    header("Content-type: application/octet-stream");
  
    header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
  
    header("Content-length: $fsize");
  
    header("cache-control: private");
  
    while(!feof($fd)){
      $buffer = fread($fd, 2048);
  
      echo $buffer;
    }
  }
  fclose($fd);
  
  exit();
}