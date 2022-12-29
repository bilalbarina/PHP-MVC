<?php



namespace App\Controllers;

use App\Models\Model;
use App\Models\User;

class LoginController{

    function __construct()
    {
        middleware_guest();
    }

    function form(){
        view("login.login");
    }
    function login(){
        $LoginModel = new User();
        $login_user =$LoginModel->all()->where('email',$_POST["email"])
        ->get();
        if (!empty($_POST)) {

            foreach ($login_user as $value){ 
                if ($_POST["email"]==$value["email"] && $_POST["password"]==$value["password"]) {
                   $_SESSION["name"]=$value["first_name"];
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
        $LoginModel = new User();
        $LoginModel->create([

                'first_name' => $_POST['name'],
                'last_name' => $_POST['prenom'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            
        ]);
        header('Location:../login/form');


    }
}

