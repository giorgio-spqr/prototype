<?php

use Project\Core\App;
use Project\Core\Database\Connection;

App::bind('config', require __DIR__ . '/../config.php');
try {
    App::bind('database', Connection::make(App::get('config')['database']));
} catch (Exception $e) {
    //some code to handle exception
}