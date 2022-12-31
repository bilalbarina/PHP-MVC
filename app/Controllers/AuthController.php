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
        $first_name = $this->validation("first_name","string");
        $last_name = $this->validation("last_name","string");
        $email = $this->validation("email","email");
        $password = $this->validation("password","password");
       
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
    function forgotPasswordSubmit(){

        view("auth.forgotPassword");
    }
    function forgotPassword(){
        if(isset($_SESSION["user"])){
            $login_user=$_SESSION["user"];
            view('auth.update_Password',compact("login_user"));
        }else{
        $LoginModel = new User();
        $login_user =$LoginModel->all()->where('email',$_POST["email"])
        ->where("last_name", $_POST["last_name"])
        ->where("first_name", $_POST["first_name"])->first();    
      
        if(isset($login_user)){ 
            $_SESSION["user"]=$login_user;
            view('auth.update_Password',compact("login_user"));
        }else{
            $_SESSION['forgotPasswordErr']="The user email or first name or last name are incorrect.";        
            header('Location:../auth/forgotPasswordSubmit');   
        
    }
}
}
    function updatePassword(){
        $newPassword = $this->validation("newPassword",'password');
        $confirmNewPassword = $this->validation("confirmNewPassword",'password');
     
        if(!empty($_SESSION["error"])){
         
        header('Location: ' . $_SERVER['HTTP_REFERER']);
         }else{
        if($confirmNewPassword==$newPassword){
            $LoginModel = new User();
            $LoginModel->find($_POST['id'])
            ->update([
                'password' => $_POST['newPassword']
            ]);
          
          header('Location:../auth/form'); 

        }else{
     $_SESSION['ConfirmPasswordErr']="password and confirm password not matched.";   
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    }
}
}

