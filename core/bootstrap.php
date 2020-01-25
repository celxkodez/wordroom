<?php

$config = require 'config.php';

require_once 'core/router.php';

require_once 'core/request.php';

require_once 'core/database/Connection.php';

require_once 'core/database/QueryBuilder.php';




return new QueryBuilder(


    Connection::make($config['database'])


);

// $database->selectAll('user');
// die(var_dump($database->selectAll('user')));
