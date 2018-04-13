<?php

namespace Mini\Controller;

use Mini\Core\Controller;
use Mini\Model\Login;
use Mini\Model\Registro;
/**
 *
 */
class RegistroController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->addData(['titulo'  =>  'Registro']);

    }

    public function index()
    {
        echo $this->view->render('registro/index');
    }

    public function doregister()
    {
        if(!$_POST) {

            echo $this->view->render('registro/index');

        } else {

            if ( ! isset($_POST['first_name']))
                $_POST['first_name'] = "";
            if ( ! isset($_POST['last_name']))
                $_POST['last_name'] = "";
            if ( ! isset($_POST['email']))
                $_POST['email'] = "";
            if ( ! isset($_POST['nickname']))
                $_POST['nickname'] = "";
            if ( ! isset($_POST['clave']))
                $_POST['clave'] = "";
            if ( ! isset($_POST['clave2']))
                $_POST['clave2'] = "";

            $datos = array(
                'first_name'	=>	$_POST['first_name'],
                'last_name'	    =>	$_POST['last_name'],
                'email'	        =>	$_POST['email'],
                'nickname'	    =>	$_POST['nickname'],
                'clave'	        =>	$_POST['clave'],
                'clave2'	    =>	$_POST['clave2'],

            );

            if ( Registro::insert($datos) ) {

                echo $this->view->render('registro/registroinsertado');

            } else {

                echo $this->view->render('registro/index',
                    array(
                        'errores'	=>	array('Error al insertar'),
                        'datos'		=>	$_POST
                    )
                );

            }
        }
    }

}