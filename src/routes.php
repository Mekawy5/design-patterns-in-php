<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/{pattern}', function (Request $request, Response $response, array $args) {
    $pattern = str_replace('-','',ucwords($request->getAttribute("pattern"),'-'));
    $className = "\\Patterns\\$pattern\\Index";
    if (!class_exists($className))
        return  "$pattern Pattern Not Existed .. Make sure you write pattern name in correct schema \n 
        ex : pattern / pattern-pattern / pattern-pattern-pattern";

    $instance = new $className;
    $instance->index();
});
