<?php

return [

  "database" => [

      "connection" => 'mysql:host=127.0.0.1',
      "username" => 'root',
      "password" => '1111',
      "dbname"  => 'wordroom',
      "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
  ]

  ];