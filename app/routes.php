<?php 

/**
 * Routes for main page (index)
 */

$router->get('', 'ApplicationsController@index');
$router->post('form', 'ApplicationsController@store');


/**
 * Routes for cron
 */
 $router->get('cron/offer', 'TasksController@send');