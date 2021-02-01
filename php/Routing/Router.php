<?php
namespace Routing;

require_once('routing.php');
require_once('Exception.php');

class Router
{
    public static function getCallable()
    {
        foreach (ROUTING_PATTERNS as $pattern => $callable) {
            if (preg_match('/^' . str_replace('/', '\/', $pattern) . '$/', $_SERVER['REDIRECT_URL'])) {
                return $callable;
            }
        }
        throw new Exception('Not found', 404);
    }
}
