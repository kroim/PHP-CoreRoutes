<?php

class Login {
    public function __construct(){
        echo "This is the login page" . '<br/>';
        // $this->_other();
    }

    protected function _other() {
        echo "This is the login route.";
    }
}