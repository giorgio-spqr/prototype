<?php

namespace Project\Services\Broker;

use Bunny\Client;
use Bunny\Message;
use Bunny\Channel;
use Project\Models\Deals;
use Project\Utils\AskToDeal;
use Project\Utils\OfferToDeal;

class RabbitMQ 
{
        private static $connection = [
                'host'      => 'coyote.rmq.cloudamqp.com',
                'vhost'     => 'zugwmjzp',
                'user'      => 'zugwmjzp',
                'password'  => 'ofsDtmr76VEUX8BTVSq35yW3_5sSSOXd',
            ];

        public static function send($array)
        {
            $client = (new Client(self::$connection))->connect();
            $channel = $client->channel();

            $channel->queueDeclare('email-send', false, true, false, false);
            $data = json_encode($array);
            $channel->publish($data, ['delivery-mode' => 2], '', 'email-send');       
            $channel->close();
            $client->disconnect();
        }

        public static function recieve()
        {
            $client = (new Client(self::$connection))->connect();
            $channel = $client->channel();
            
            $queue = $channel->queueDeclare('email-send', false, true, false, false);
            
            echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";
            
            $channel->qos(0, 5);
            $channel->run(
                function (Message $message, Channel $channel, Client $client) {
                    $data = json_decode($message->content, true);
                    $deals = new Deals;
                    
                    if (!empty($data['offers'])) {
                        foreach ($data['offers'] as $v) {
                            OfferToDeal::send('email', $v); // sending email
                            $ids[] = $v['deal_id'];
                        }

                        if (count($ids) > 0) {
                            $deals->updateRows($ids); // updating dt_send in deals table
                        }
                    } elseif (!empty($data['partner_id'])) {
                        var_dump($data);
                        AskToDeal::send('email', $data['partner_email'], $data['msg']); // sending email
                        $deals->create(['applications_id' => $data['application_id'], 'partners_id' => $data['partner_id']]); // adding row to deals with ask flag
                    }
                    
                    $channel->ack($message);
                },
                'email-send'
            );
        }
}
