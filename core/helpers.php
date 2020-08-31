<?php

function view($name, $data =[])
{
    extract($data);

    return require "app/Views/{$name}.view.php";
}


function redirect($path = '')
{    
    header("Location: /{$path}");
}