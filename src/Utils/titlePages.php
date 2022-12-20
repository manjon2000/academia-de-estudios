<?php

final class titlePages {
    public static function getTitlePage(String $title): ?String  {

        $file = file_get_contents(__DIR__ . '/../../locale/translation.json');
        $json = json_decode($file, true);

        if( !array_key_exists($title, $json['title']) ) {
            return null;
        }

        return $json['title'][$title];
    }
}
