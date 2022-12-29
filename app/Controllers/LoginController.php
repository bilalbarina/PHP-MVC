<?php



namespace App\Controllers;

use App\Models\Model;
use App\Models\Login;

class LoginController{

    function __construct()
    {
        middleware_guest();
    }

    function form(){
        view("login.login");
    }
    function login(){
        $LoginModel = new Login();
        $login_user =$LoginModel->all()->get();
        if (!empty($_POST)) {

            foreach ($login_user as $value){ 
                
                if ($_POST["email"]==$value["email"] && $_POST["password"]==$value["password"]) {
                   $_SESSION["name"]=$value["name"];
                   header('Location:../task/index');
                }
                else{
                    var_dump("erure");
                }
             
                 }
            
        }
    }
    function logout(){
        if (isset($_SESSION["name"])) {
          unset($_SESSION["name"]);
          header('Location:../login/form');
        }
    }

    function formRegister(){
        view("login.register");
    }

    function register(){
        $LoginModel = new Login();
        $LoginModel->create([

                'name' => $_POST['name'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            
        ]);
        header('Location:../login/form');


    }
}

