<?php

namespace App\Controllers;

use App\Models\Model;
use App\Models\Task;

class TaskController {

    function __construct()
    {
        middleware_auth(); 
    }
  
    public function index() {
       
        $taskModel = new Task();
        $tasks = $taskModel->all()->get();
         view("task.index",compact("tasks"));
    }

    public function create(){
      
    view("task.create");
    }
    public function store(){  
        $taskModel= new Task();
        $taskModel->create([
            "title"=>$_POST['name']
        ]);
        header('Location:./index');   
    }
    
    public function delete(){
        $id = $_POST['id'];
        var_dump($id);
        // die();
        $taskModel= new Task();
        $taskModel->find($id)->delete();
        header('Location:./index');

    }
    public function edit(){
        $id = $_POST['id'];
        $taskModel = new Task();
        $tasks = $taskModel->find($id)->first();
        // var_dump($tasks);
        view("task.edit",compact("tasks"));
        
    }
    public function update(){
        
        $id = $_POST["id"];
        $taskModel= new Task();
    var_dump($_POST);
    // die();
        $taskModel->find($id)->update([
            'title' => $_POST['name']
        ]);
        header('Location:./index');
        // var_dump($tasks);
        
    }
}
