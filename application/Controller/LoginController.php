<?php

namespace Mini\Controller;

use Mini\Core\Controller;
use Mini\Model\Login;
use Mini\Libs\Sesion;

/**
 *
 */
class LoginController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->addData(['titulo'  =>  'Login']);

    }

    public function index()
    {
        echo $this->view->render('login/index');
    }

    public function dologin()
    {
        if (Login::dologin($_POST)) {
            //echo 'paso2';
            if ($origen = Sesion::get('origen')) {
                //echo 'paso3'; exit();
                Sesion::set('origen', null);
                echo 'location' . $origen;
                header('location: ' . $origen);
                exit();
            }else{
                echo $this->view->render('login/usuariologueado');
            }

        }else{
            echo $this->view->render('login/index');
        }
    }

    public function salir()
    {
        Login::salir();
    }
}