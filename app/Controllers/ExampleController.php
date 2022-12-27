<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\Task;

class ExampleController {
    public function index() {


        $taskModel = new Task();
        $tasks = $taskModel->all()->get();
         view("example.index",compact("tasks"));
    }

    public function create(){

    view("example.create");
    }
    public function store(){

        $taskModel= new Task();
        $taskModel->create($_POST);
        header('Location:./index');

    view("example.create");
    }
    
}
