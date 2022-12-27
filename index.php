<?php

require __DIR__ . '/core/bootstrap.php';

// Split 'request' query.
if (empty($_GET['request'])) {
    die("Invalid request. No Controller found.");
}

$request = $_GET['request'];
$exploded = explode('/', $request);

// Get controller name.
$controllerName = $exploded[0];

// Get method name if exist. Default: index.
$method = isset($exploded[1]) ? $exploded[1] : 'index';

// Initialize the controller instance.
$controllerInstance = init_controller($controllerName);

// Call requested method on the controller.
if (!method_exists($controllerInstance, $method)) {
    die('Method not found on '. get_class($controllerInstance) .'. Method: ' . $method);
}

$controllerInstance->$method();