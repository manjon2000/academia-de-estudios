<?php

include_once __DIR__ . '/../Utils/PasswordCipher.php';
include_once __DIR__ . '/../Models/registerModel.php';

final class registerController
{

    public $dataUser = [];
    public function __construct(
        public readonly String $name,
        public readonly String $lastName,
        public readonly String $email,
        public readonly String $password
    ) {}

    public function saveUser() {

        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $dataUser['email'] = $this->email;
            $dataUser['name'] = $this->name;
            $dataUser['lastName'] = $this->lastName;
            $dataUser['password'] = PasswordCipher::encrypt($this->password);
            if (registerModel::setUser($dataUser)) {
                return true;
            } else {return false;}
        }

    }
}
