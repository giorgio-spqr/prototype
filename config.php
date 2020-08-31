<?php 

return [
    'database' => [
        'name'          => 'project',
        'username'      => 'project',
        'password'     => 'K@k@k@123',
        'connection'    => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
 ];