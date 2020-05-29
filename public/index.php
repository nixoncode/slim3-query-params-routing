<?php
/**
 * Created by PhpStorm.
 * User: nixon
 * Date: 29/05/2020
 * Time: 05:01
 */

use Slim\App;

date_default_timezone_set('Africa/Nairobi');

require_once __DIR__ . '/../vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new App($config);


$app->get('/', function ($request, $response){
   $response->write('Hello World');
});


$app->run();