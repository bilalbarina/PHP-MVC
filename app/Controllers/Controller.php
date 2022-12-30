<?php

namespace App\Controllers;

abstract class Controller {

          public function validation($key ,$rule){
            // $array_value =array_values($rule);
            // $array_key =array_keys($rule);
            // $rule= implode(" ", $array_value);
            // $key= implode(" ", $array_key);
          
            $value = trim($_POST[$key]);
            $value = stripslashes($_POST[$key]);
            $value = htmlspecialchars($_POST[$key]);

          ;
            if($rule == 'email' ){
              if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $_SESSION["error"][$key]= $emailErr = "Invalid email format";
                
                }
          else{
            unset($_SESSION["error"][$key]);
                    return $value;
                }
          }
          if($rule == "password"){   

          $uppercase = preg_match('@[A-Z]@', $value);
          $lowercase = preg_match('@[a-z]@', $value);
          $number    = preg_match('@[0-9]@', $value);

          if(!$uppercase || !$lowercase || !$number  || strlen($value) < 8) {
            $passwordErr= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number.';
          $_SESSION["error"][$key]=$passwordErr;
            }
          else{
            unset($_SESSION["error"][$key]);
            return $value;
          }
          }
          if($rule == "string"){ 
          if (!preg_match("/^[a-zA-Z-' ]*$/",$value) || $value == "") {
            $_SESSION["error"][$key]= $stringErr = "Only letters and white space allowed";

          }
          else{
            unset($_SESSION["error"][$key]);
              return $value;
          
          }
        }


          }



}