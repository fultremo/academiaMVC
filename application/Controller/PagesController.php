<?php
/**
 * Created by PhpStorm.
 * User: fulgen
 * Date: 26/03/18
 * Time: 20:28
 */

namespace Mini\Controller;
use Mini\Core\Controller;


class PagesController extends Controller
{
    public function about()
    {
        $this->view->addData(['titulo'  =>  'About']);
        echo $this->view->render('pages/about', ['titulo'    =>  'Nosotros']);
    }

    public function courses()
    {
        $this->view->addData(['titulo'  =>  'Cursos']);
        echo $this->view->render('pages/courses', ['titulo'    =>  'Cursos']);
    }

    public function contact()
    {
        $this->view->addData(['titulo'  =>  'Contacto']);
        echo $this->view->render('pages/contact', ['titulo'    =>  'Contacto']);
    }
}