<?php
/**
 * Created by PhpStorm.
 * User: nixon
 * Date: 29/05/2020
 * Time: 10:07
 */

namespace App\Middleware;


use Slim\Http\Request;
use Slim\Http\Response;

class RouteOverrideOverride
{
    public function __invoke(Request $request, Response $response, $next)
    {
       return $next($request, $response);
    }
}