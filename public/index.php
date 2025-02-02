<?php
/**
 * Created by PhpStorm.
 * User: nixon
 * Date: 29/05/2020
 * Time: 05:01
 */

use App\Controllers\HomeController;
use App\Controllers\NewController;
use App\Middleware\RouteOverrideOverride;
use Slim\App;

date_default_timezone_set('Africa/Nairobi');

require_once __DIR__ . '/../vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new App($config);


$app->get('/', HomeController::class);
$app->get('/new', NewController::class);

$app->add(RouteOverrideOverride::class);

$app->run();