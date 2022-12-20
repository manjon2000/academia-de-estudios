<?php

include_once __DIR__ . '/../Models/loginModel.php';
include_once __DIR__ . '/../Utils/PasswordCipher.php';

unset($_SESSION['error-email']);
unset($_SESSION['not-exist-user']);
unset($_SESSION['error-password']);

final class loginController {

    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {}

    public function loginUser() {

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $selectUser = new loginModel();
            $dataUser = $selectUser->userLogin($this->email);
            if ($dataUser) {

                if (PasswordCipher::verify($this->password, $dataUser['password'])) {
                    $_SESSION['user'] = [
                        'name' => $dataUser['name'],
                        'lastName' => $dataUser['last_name'],
                        'email' => $dataUser['email'],
                    ];
                    return true;
                } else { $_SESSION['error-password'] = 'La contraseña es incorrecta';return false;}

            } else { $_SESSION['not-exist-user'] = 'El usuario no existe'; return false;}
        } else {
            $_SESSION['error-email'] = 'El formato del correo electronico es incorrecto';
            return null;
        }

    }

}
