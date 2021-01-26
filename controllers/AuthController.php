<?php
include "./views/auth/login.php";

class AuthController
{
    public function __construct()
    {
    }

    public function getLogin()
    {
        echo "Login Page";
    }

    public function postLogin($request)
    {
        echo "Login post";
    }

    public function getRegister()
    {
        echo "Register page";
    }

    public function postRegister($request)
    {
        echo "Register post";
    }

    public function getForgotPassword()
    {
        echo "Forgot password page";
    }

    public function postForgotPassword($request)
    {
        echo "Forgot password post";
    }

    public function getResetPassword()
    {
        echo "Reset password page";
    }

    public function postResetPassword($request)
    {
        echo "Reset password post";
    }
}
