<?php
namespace Project\Services\Broker;

//load composer
require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../core/bootstrap.php';
require_once __DIR__ . '/../../../config.php';

if (php_sapi_name() == 'cli') {
    RabbitMQ::recieve();
}