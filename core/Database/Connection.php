<?php

namespace Project\Core\Database;

use ezsql\Database;

class Connection
{
    public static function make($config)
    {
        try {
            return Database::initialize(
                'pdo',
                [
                    $config['connection'] .';dbname=' . $config['name'],
                    $config['username'],
                    $config['password']
                ]
            );
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}