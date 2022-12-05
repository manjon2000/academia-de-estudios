<?php

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

require_once __DIR__ . '/../Utils/DB.php';
require_once __DIR__ . '/../Utils/PasswordCipher.php';



final class loginModel {


    public static function userLogin(string $email) {

        /**
         * Logger
         */
        $loggerLoginInfo = new Logger('login_info');
        $loggerLoginError = new Logger('login_error');
        $loggerLoginInfo->pushHandler(new StreamHandler(__DIR__ . '/../../logs/login/log.log', Level::Info));
        $loggerLoginError->pushHandler(new StreamHandler(__DIR__ . '/../../logs/login/log.log', Level::Error));

        $conexion = new DB();
        $query = $conexion->connect()->query("SELECT * FROM users WHERE email = '".$email."'");
        if( $query->num_rows > 0 ) {
            $loggerLoginInfo->info("BBDD: El usuario $email ha iniciado session");
            return $query->fetch_assoc();
        } else {
            $loggerLoginError->error("BBDD: Error databases el email $email ha intentado iniciar session");
            return false;

        }
    }
}