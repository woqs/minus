<?php

spl_autoload_register(function ($class_name) {
    include str_replace('\\', '/', $class_name) . '.php';
});

try {
    $callable = Routing\Router::getCallable();    
} catch(Routing\Exception $e) {
    echo $e->getMessage();
    exit();
}
parse_str($_SERVER['QUERY_STRING'], $queryString);
$callable::handle($queryString);
