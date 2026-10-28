<?php

namespace App\Controllers;

class AuthController {
    public function loginForm() {

    }

    public function login() {

    }

    public function registerForm() {
        session_start();
        //$_SESSION['bla'] = 'lol';
        dump($_SESSION);
        setcookie('mycookie', 'tasty', time() + 60 * 60 * 24 * 30, '', '', false, true);
        dump($_COOKIE);
    }

    public function register() {

    }

    public function logout() {

    }
}
