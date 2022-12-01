<?php

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

require_once __DIR__ . '/../Utils/DB.php';

class registerModel {

    public static function setUser($args) {
        /**
         * Logger
         */
        $loggerLoginInfo = new Logger('login_info');
        $loggerLoginError = new Logger('login_error');
        $loggerLoginInfo->pushHandler(new StreamHandler(__DIR__ . '/../../logs/register/log.log', Level::Info));
        $loggerLoginError->pushHandler(new StreamHandler(__DIR__ . '/../../logs/register/log.log', Level::Error));

        try {
            $conexion = new DB();
            $querySend = $conexion->connect()->query("INSERT INTO users (`name`, `last_name`, `email`, `password`) VALUES('" . $args['name'] . "', '" . $args['lastName'] . "', '" . $args['email'] . "', '" . $args['password'] . "')");
            $loggerLoginInfo->info('BBDD: El usuario '.$args['email'].' se ha registrado');
            return true;
        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
            $loggerLoginError->error('BBDD: Error databases el email '.$args['email'].'ha tenido un error al registrarse'.$e->getMessage());
        }

        return null;

    }

}
