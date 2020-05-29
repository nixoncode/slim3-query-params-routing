<?php
/**
 * Created by PhpStorm.
 * User: nixon
 * Date: 29/05/2020
 * Time: 09:51
 */

namespace App\Controllers;


use Slim\Http\Request;
use Slim\Http\Response;

class HomeController
{
 public function __invoke(Request $request, Response $response)
 {
     return $response->write('Home Controller');
 }
}