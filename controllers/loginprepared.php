<?php

class Login {
  // protected $status;

  protected $usermeans;

  protected $password;

  protected $database;

  public function __construct($usermeans, $password){

    $this->usermeans = $usermeans;

    $this->password = $password;
    $this->database = require 'core/bootstrap.php';
  }

  public function login(){
    $userdata = $this->database->selectFromRow('user', 'email', $this->usermeans);

    if($userdata === false){

      // header('Location: /admin?error=user not found');
      return ['all'=>0, 'status'=> false, 'message'=>'user not found'];
      exit();
    } else {

      $verified = password_verify($this->password, $userdata['password']);
  

      if($verified){
        // $_SESSION['user_name'] = $userdata['usenrname'];
        // header('Location: /admin');
        $allData = ['all'=>$userdata, 'status'=> true];
        // var_dump($allData);
        return $allData;
        
        exit();
      }
        // header('Location: /admin?error=Incorrect username or password!');
        return  ['all'=>0, 'status'=> false, 'message'=> 'Incorrect username or password!'];
        exit();
    }
  
  
  
  
  }
}
