<?php

namespace App\Controllers;

abstract class Controller {

    // public function validation($data){
    //     $name = $data["name"];
    //     // check if name only contains letters and whitespace
    //     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    //       $nameErr = "Only letters and white space allowed";
    //     return $nameErr;
    //     }
    //     else{
    //         return $name;
    //     }
    //     // var_dump($nameErr);
    //     // die();

    // }
    function strip($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
}