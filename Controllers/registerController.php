<?php


include_once __DIR__ . '/../Utils/PasswordCipher.php';
include_once __DIR__ . '/../Models/registerModel.php';

class registerController {

    public $dataUser = [];
    public function __construct(
        public String $name,
        public String $lastName,
        public String $email,
        public String $password
    ) {}

    public function saveUser() {
       
        $dataUser['email'] = $this->email;
        $dataUser['name'] = $this->name;
        $dataUser['lastName'] = $this->lastName;
        $dataUser['password'] = PasswordCipher::encrypt($this->password);
        if( registerModel::setUser($dataUser) ) {
            return true;
        } else { return false; }
        /*
        if ( count($dataUser) > 0 ) {
            $setUser = registerModel::setUser($dataUser);
            return $setUser;
            // if( !$setUser ) { return false; } else { return true; }
        } else {
            return false;
        }
        */

    }


}