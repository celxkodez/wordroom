<?php


class Post{

  protected $database;

  public function __construct($database){
    
    $this->database = $database;
    
  }

  public function addPost($post_title, $post_body,  $media_url, $post_type ){

    $contents = [
      'title' => $post_title, 
      'body'=> $post_body, 
      'post_type'=>$post_type, 
      'media_url'=> $media_url
    ];



    $this->database->insert('post', $contents);
    // die(var_dump($contents));

    // var_dump($this->database);

    
    exit();

  }

}