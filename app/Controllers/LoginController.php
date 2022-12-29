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
        $password = $_POST["password"];
        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        
        if(!$uppercase || !$lowercase || !$number  || strlen($password) < 8) {
            $passwordErr= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number.';
           die($password);
         }else{
            $password;
        }             
        //    validation first name
    if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
        $first_nameErr = "Only letters and white space allowed";
        die($first_nameErr);
    }
    else{
        $first_nameCorrect =$first_name;
       }
    //    validation last name
    if (!preg_match("/^[a-zA-Z-' ]*$/",$last_name)) {
        $last_nameErr = "Only letters and white space allowed";
        die($last_nameErr);
    }
    else{
        $last_nameCorrect = $last_name;
       }
    // validation email 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format";
        die($emailErr);
         }
    else{
        $emailCorrect =$email;
         }
        $LoginModel = new User();
        $LoginModel->create([

                'first_name' => $first_nameCorrect,
                'last_name' => $last_nameCorrect,
                'email' =>$emailCorrect ,
                'password' => $password,
            
        ]);
        header('Location:../login/form');

    
    }
}

