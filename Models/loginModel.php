<?php

require_once __DIR__ . '/../Utils/DB.php';
require_once __DIR__ . '/../Utils/PasswordCipher.php';



class loginModel {


    public static function userLogin(string $email) {
        $conexion = new DB();
        $query = $conexion->connect()->query("SELECT * FROM users WHERE email = '".$email."'");
        if( $query->num_rows > 0 ) {
            return $query->fetch_assoc();
        } else {
            return false;
        }
    }
}