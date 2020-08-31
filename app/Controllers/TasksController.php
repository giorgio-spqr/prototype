<?php
namespace Project\Controllers;

use Project\Models\Deals;
use Project\Services\Broker\RabbitMQ;

class TasksController
{

    public function send()
    {
        $deal = new Deals();
        $data['offers'] = $deal->getOffers();

        if (!empty($data['offers'])) {
            echo 'OK';
            RabbitMQ::send($data); //sending to rabbit queue
        }
    }
}
