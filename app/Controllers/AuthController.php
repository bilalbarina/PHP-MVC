<?php
namespace App\Controllers;

use App\Models\Model;
use App\Models\User;

class AuthController extends Controller{
    function __construct()
    {
        middleware_guest();
    }
    function form(){
        view("auth.login");
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
                    $_SESSION['loginError']="The user email or password are incorrect.";
                
                    header('Location:../auth/form');   
                }
    }
    function logout(){
        if (isset($_SESSION["name"])) {
          unset($_SESSION["name"]);
          header('Location:../auth/form');
        }
    }
    function formRegister(){
        view("auth.register");
    }

    function register(){
        $first_name = $this->validation(["first_name"=>$_POST["first_name"]]);
        $last_name = $this->validation(["last_name"=>$_POST["last_name"]]);
        $email = $this->validation(["email"=>$_POST["email"]]);
        $password = $this->validation(["password"=> $_POST["password"]]);
       
         if(!empty($_SESSION["error"])){
            header('Location:../auth/formRegister');
         }else{
        $LoginModel = new User();
        $LoginModel->create([

                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' =>$email ,
                'password' => $password,
            
        ]);
                  $name = $first_name ." ".$last_name;
                  $_SESSION["name"]=$name;
                header('Location:../task/index'); 
    }
    }
}

