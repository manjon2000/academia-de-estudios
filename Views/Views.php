<?php

class Views {

    public function __construct(
        private String $page
    ) {}
    
    public function routes() {
        if( $this->verifyPage($this->page) ) {
            return $this->page;
        } else { return '404'; }
    }

    private function verifyPage(String $page) {
        $filename = __DIR__ . "/Pages/".trim($page).".php";
        return file_exists($filename);        
    }

}