<?php

require_once __DIR__ . '/../Utils/DB.php';

class registerModel
{

    public static function setUser($args)
    {

        try {
            $conexion = new DB();
            $querySend = $conexion->connect()->query("INSERT INTO users (`name`, `last_name`, `email`, `password`) VALUES('" . $args['name'] . "', '" . $args['lastName'] . "', '" . $args['email'] . "', '" . $args['password'] . "')");
            return true;
        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
        }

        return null;

    }

}
