<?php

namespace Project\Services\Email;

class SendMail
{
    public static function send($data)
    {
        // some code for sending e-mail, just for example we write simply to file
        file_put_contents('mail.txt', $data, FILE_APPEND);
        echo 'Email has been sent!';
    }
}