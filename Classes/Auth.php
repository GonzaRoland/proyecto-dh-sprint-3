<?php

class Auth
{
    public function __construct()
    {
        session_start();
        if(!isset($_SESSION['logged']) && isset($_COOKIE['logged'])){
            $_SESSION['logged'] = $_COOKIE['logged'];
        }
    }
    public function login($email)
    {
        $_SESSION['logged'] = $email;
        setcookie('logged', $email, time() + 3600 * 2);
        //redirect('Location: dogo.php?pagina=perfil');
    }

    public function logout()
    {
        if(!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        setcookie('logged', "", time() - 1);
    }

    public function check()
    {
        return isset($_SESSION['logged']);
    }


}