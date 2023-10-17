<?php

class authHelper{

    function __construct() {
        if (!isset($_SESSION)) {
            session_start();
            
        }
    }

    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }
}
