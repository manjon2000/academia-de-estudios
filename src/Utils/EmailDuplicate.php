<?php

include_once __DIR__ . '/../Utils/DB.php';

class EmailDuplicate {

    public static function verifyEmail(string $email) {
        // Filtrar que es un email

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $conxion = new DB();
            $query = $conxion->connect()->query("SELECT email FROM users WHERE email = '" . $email . "'");

            if ($query->num_rows <= 0) {

                return true;
            
            } else {
            
                return false;
            
            }

        } else {
            
            return false;
            die();
        }

    }
}

header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['email'])) {
    
    if (EmailDuplicate::verifyEmail($_GET['email'])) {
        $data = array('duplicate' => false);
    } else {
        $data = array('duplicate' => true);
    }

    echo json_encode($data);
}
