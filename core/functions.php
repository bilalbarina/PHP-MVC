<?php

if(!isset( $_SESSION['name']) and  $_GET['request'] != "login/formRegister" and  $_GET['request'] != "login/form" ){ 
    header('Location:../login/form');
   }

function base_path($path = null)
{
    return __DIR__ . '/../' . $path;
}

function init_controller($controllerName)
{
    $controller = '\\App\\Controllers\\' . ucfirst($controllerName) . 'Controller';

    if (!class_exists($controller)) {
        die('No controller found. ' . $controller);
    }

    return new $controller();
}

function view($viewName, $data = []) {
    $viewPath = str_replace('.', '/', $viewName);
    extract($data);
    include base_path('views/' . $viewPath . '.php');
    exit();
}