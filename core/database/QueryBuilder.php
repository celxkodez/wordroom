
<?php

class QueryBuilder {

  protected $pdo;

  public function __construct(PDO $pdo) {

    $this->pdo = $pdo;

  }


  public function selectAll($table) {

      $statement = $this->pdo->prepare("select * from {$table} where 1");

      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);
      
  }

  //SELECTING ALL FROM ROW IN A TABLE
  // SELECT * FROM `user` WHERE email = 'example@gmail.com'
  public function selectFromRow($table, $rowName, $row) {

    $statement = $this->pdo->prepare("select * from $table where $rowName = :row");
    // die(var_dump($statement));

    $statement->bindValue(':row', $row);

    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
    
}

  // public function select($table, $value1, $value2) {

  //   $statement = $this->pdo->prepare('select * from {$table} where  userName={$value1} and password={$value2}');
   

  //     $statement->execute();

  //     return $statement->fetch(PDO::FETCH_ASSOC);
  // }

  // public function fetchUser($userId, $userEmail, $password){
  //   $statement = $this->pdo->prepare(''SELECT Id, username, password FROM user WHERE username = :username');
   

  //   $statement->execute();

  //   return $statement->fetch(PDO::FETCH_ASSOC);

  // }

  public function insert($table, $params){
    $sql = sprintf('insert into %s (%s) values (%s)',
                  $table,
                  implode(', ', array_keys($params)),
                  ':' .implode(', :', array_keys($params))
          
  );

 try {
  $statement = $this->pdo->prepare($sql);

  $statement->execute( $params);
 } catch (Exception $e){
   
   die('some thing went wrrong' .$e);
   
 }


  // die(var_dump($params));
  }

}