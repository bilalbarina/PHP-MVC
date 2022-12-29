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
        $login_user =$LoginModel->all()->where('email',$_POST["email"])->where("password", $_POST["password"])->first(); 
        if(!is_null($login_user)){
            $name = $login_user['first_name'] ." ".$login_user['last_name'];
                    $_SESSION["name"]=$name;
                   header('Location:../task/index'); 
                }
                else{
                    die("erurr");
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

