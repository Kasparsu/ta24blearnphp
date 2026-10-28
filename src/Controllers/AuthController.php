<?php

namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function loginForm() {
        view('auth/login');
    }

    public function login() {
        $users = User::where('email', $_POST['email']);
        $user = $users[0] ?? null;
        if(!$user || $_POST['password'] !== $user->password) {
            return redirect('/login');
        }
        $_SESSION['userID'] = $user->id;
        redirect('/');
    }

    public function registerForm() {
        view('auth/register');
    }

    public function register() {
        $users = User::where('email', $_POST['email']);
        $user = $users[0] ?? null;
        if($user || $_POST['password'] !== $_POST['password_confirm']) {
            return redirect('/register');
        }
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        redirect('/login');
    }

    public function logout() {
        unset($_SESSION['userID']);
        redirect('/');
    }
}
