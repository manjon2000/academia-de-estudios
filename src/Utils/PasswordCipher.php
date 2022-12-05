<?php

final class PasswordCipher
{

    /**
     * Encrypt password
     *
     * @params string $password
     * @return string
     */

    public static function encrypt(string $password): string {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    /**
     * Encrypt password
     *
     * @param string $password
     * @param string $hash
     * @return bool
     */

    public static function verify(string $password, string $hash): bool {
        return password_verify($password, $hash);
    }

}
