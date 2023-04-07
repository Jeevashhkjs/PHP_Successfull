<?php
$app = [];

require 'connection.php';

$app['db'] = (new DbConnection()) -> db;

$routers = [
    '/' => 'viewers/registerView.php',
    '/register' => 'controllers/register.php',
    '/home' => 'controllers/home.php',
    '/logIn' => 'controllers/logIn.php',
];

if(array_key_exists($_SERVER['REQUEST_URI'],$routers)){
        require $routers[$_SERVER['REQUEST_URI']];
}
else{
    http_response_code (404);
    require 'viewers/error/error.php';
}

?>