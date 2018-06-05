<?php

namespace Mini\Core;

use Mini\Libs\Sesion;

/**
 *
 */
class Auth
{
    public static function checkAutentication()
    {
        Sesion::init();
        if (!Sesion::userIsLoggedIn()) {
            Sesion::destroy();
            Sesion::init();
            echo $_SERVER['REQUEST_URI'];
            Sesion::set('origen', $_SERVER['REQUEST_URI']);
            header('location: /academia/login');
            exit();
        }
    }
}