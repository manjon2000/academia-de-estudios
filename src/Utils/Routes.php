<?php

final class Routes {
    public static function url(string $name): string {

        if($name == 'home') {
            return NAME_URL.'/';
        }else {
            return NAME_URL."/?page=$name";
        }

    }
}
