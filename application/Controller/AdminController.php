<?php
/**
 * Created by PhpStorm.
 * User: fulgen
 * Date: 25/05/18
 * Time: 21:02
 */

namespace Mini\Controller;


use Mini\Core\Auth;
use Mini\Core\Controller;
use Mini\Libs\Sesion;

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        Sesion::set('origen', '/admin');
        Auth::checkAutentication();
        $this->titulo = 'Página privada';
        $this->view->addData(['titulo' => $this->titulo]);
    }

    public function dashboard()
    {
        echo $this->view->render('admin/dashboard');
    }
}