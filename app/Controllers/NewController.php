<?php
/**
 * Created by PhpStorm.
 * User: nixon
 * Date: 29/05/2020
 * Time: 10:26
 */

namespace App\Controllers;


use Slim\Http\Request;
use Slim\Http\Response;

class NewController
{
    public function __invoke(Request $request, Response $response)
    {
        return $response->write('Home controller turned New');
    }
}