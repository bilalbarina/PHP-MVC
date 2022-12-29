<?php



namespace App\Controllers;

use App\Models\Model;
use App\Models\User;

class LoginController extends Controller{

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
        $first_name = $this->strip($_POST["first_name"]);
        $last_name = $this->strip($_POST["last_name"]);
        $email = $this->strip($_POST["email"]);
        
        
        //    validation first name
        $errors = array();
    if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
        $first_nameErr = "Only letters and white space allowed";
        $errors['first_name']=$first_nameErr;
    }
    else{
        $first_nameCorrect =$first_name;
       }
    //    validation last name
    if (!preg_match("/^[a-zA-Z-' ]*$/",$last_name)) {
        $last_nameErr = "Only letters and white space allowed";
        $errors['last_name']=$last_nameErr;

    }
    else{
        $last_nameCorrect = $last_name;
       }

    // validation email 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
         $errors['email'] = $emailErr;

         }
    else{
        $emailCorrect =$email;
         }

        //  var_dump($message);
        // //  die();
          if(!empty($errors)){

         $_SESSION["errors"]=$errors;
         header('Location:../login/formRegister');

        }  else{

        $LoginModel = new User();
        $LoginModel->create([

                'first_name' => $first_nameCorrect,
                'last_name' => $last_nameCorrect,
                'email' =>$emailCorrect ,
                'password' => $_POST['password'],
            
        ]);
        header('Location:../login/form');

    }
    }
}

