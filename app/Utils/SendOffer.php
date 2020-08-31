<?php

namespace Project\Utils;

use Project\Models\Deals;
use Project\Services\Broker\RabbitMQ;
use Project\Services\Email\SendMail;

interface SendOffer
{
    public static function send($type, $data);
}

class AskToDeal extends Deals implements SendOffer
{
    public static function send($type, $data)
    {
        if ($type == 'email') {
            SendMail::send($data);
        } elseif ($type == 'rabbitmq') {
            RabbitMQ::send($data);
        }
    }
}

class OfferToDeal extends Deals implements SendOffer
{
    public static function send($type, $data)
    {
        if ($type == 'email') {
            SendMail::send($data);
        } elseif ($type == 'rabbitmq') {
            RabbitMQ::send($data);
        }
    }
}