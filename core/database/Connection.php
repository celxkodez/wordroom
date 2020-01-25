<?php


//database connection class 
// die(var_dump($config));

class Connection {

  public static function make($config) {
    // die(var_dump($config));
    // die(var_dump($config['username']));
    
    try {

      return $pdo = new PDO(
        $config['connection'].';dbname='.$config['dbname'],
        $config['username'],

        $config['password'],

        $config['options']
        
       );

  
    } catch ( PDOexception $e ) {
  
     
      die($e->GetMessage());
      
  
    }
  
  }

}