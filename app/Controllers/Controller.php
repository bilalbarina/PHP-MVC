<?php

namespace App\Controllers;

abstract class Controller {

          public function validation(array $data){
            $array_value =array_values($data);
            $array_key =array_keys($data);
            $value= implode(" ", $array_value);
            $key= implode(" ", $array_key);
          
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value);
            if($key == 'email' ){
              if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                $_SESSION["error"][$key]= $emailErr = "Invalid email format";
                
                }
          else{
            unset($_SESSION["error"][$key]);
                    return $value;
                }
          }
          if($key == "password"){   

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
          else{
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