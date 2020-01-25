<?php

$config = require 'config.php';

require 'database/Connection.php';

require 'database/QueryBuilder.php';



$database = new QueryBuilder(


  Connection::make($config['database'])


);




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php page</title>
</head>
<body>
  

<pre>
  <?php
  $data = $database->selectAll('user');


  ?>

  <!-- <pre>// echo $data </pre> -->
<?php
// foreach($data as $datas){
//  die(var_dump($data));
echo $data;
// }

?>
</body>
</html>