<?php
/**
 * Created by PhpStorm.
 * User: fulgen
 * Date: 3/05/18
 * Time: 21:48
 */

namespace Mini\Controller;


use Mini\Core\Controller;
use Mini\Model\Contact;

class ContactsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->addData(['titulo'  =>  'Contacto']);

    }

    public function index()
    {
        echo $this->view->render('pages/contact');
    }

    public function sendmessage()
    {
        if(!$_POST) {

            echo $this->view->render('pages/contact');

        } else {

            if ( ! isset($_POST['first_name']))
                $_POST['first_name'] = "";
            if ( ! isset($_POST['last_name']))
                $_POST['last_name'] = "";
            if ( ! isset($_POST['email']))
                $_POST['email'] = "";
            if ( ! isset($_POST['subject']))
                $_POST['subject'] = "";
            if ( ! isset($_POST['message']))
                $_POST['message'] = "";

            $datos = array(
                'first_name'	=>	$_POST['first_name'],
                'last_name'	    =>	$_POST['last_name'],
                'email'	        =>	$_POST['email'],
                'subject'	    =>	$_POST['subject'],
                'message'	    =>	$_POST['message'],
            );

            if ( Contact::insert($datos) ) {

                echo $this->view->render('pages/mensajenviado');

            } else {

                echo $this->view->render('pages/contact',
                    array(
                        'errores'	=>	array('Error al enviar'),
                        'datos'		=>	$_POST
                    )
                );

            }
        }
    }
}