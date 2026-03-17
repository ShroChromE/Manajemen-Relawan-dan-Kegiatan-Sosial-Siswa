<?php
namespace app\controllers;

class AuthController
{
    public function login()
    {
        require_once '../app/views/auth/login.php';
    }
    public function signup()
    {
        require_once '../app/views/auth/signup.php';
    }
}