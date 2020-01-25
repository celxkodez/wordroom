<?php


// require 'login.php';

// require 'logout.php';

class Authentication {
  
  protected $userEmail;
  protected $userPwd;

  public function __construct($userEmail,  $userPwd) {
    
    $this->userEmail = $userEmail;
    $this->userPwd = $userPwd;
 
  }

  public function login() {
      
  }

}