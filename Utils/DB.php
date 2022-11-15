<?php

include_once __DIR__ . '/../Config/Settings.php';

class DB {

    public string $host     = DB_SETTINGS['HOST'];
    public string $user     = DB_SETTINGS['USER'];
    public string $password = DB_SETTINGS['PASSWORD'];
    public string $database = DB_SETTINGS['DATABASE'];


    public function connect() {
        $conn = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );

        if ( $conn->connect_errno ) {
            return 'Fallo al conectarse a la base de datos'. $conn->connect_errno;
            exit();
        } else {
            return $conn;
        }

    }
    

}