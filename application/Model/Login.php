<?php

namespace Mini\Model;
use Mini\Libs\Sesion;
use Mini\Core\Database;
use PDO;

/**
 *
 */
class Login
{

    public static function dologin($datos)
    {
        if (! $datos) {
            Sesion::add("feedback_negative", "No he recibido los datos de login");
            return false;

        }
        if (empty($datos['email'])) {
            Sesion::add("feedback_negative", "No se ha indicado el email");
        }

        if (empty($datos['clave'])) {
            Sesion::add("feedback_negative", "No se ha indicado la contraseña");
        }
        if (Sesion::get('feedback_negative')) {
            return false;
        }

        $datos['email'] = trim($datos['email']);
        if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {

            Sesion::add("feedback_negative", "El email debe ser válido");

        }
        if (strlen($datos['clave'])<4) {
            Sesion::add("feedback_negative", "La contraseña debe tener al menos 4 caracteres");
        }
        if (Sesion::get('feedback_negative')) {
            return false;
        }

        $conn = Database::getInstance()->getDatabase();
        $ssql = "SELECT id, first_name, last_name, nickname, email, password, created_at FROM users WHERE email = :email";
        $query = $conn->prepare($ssql);
        $query->bindValue(':email', $datos['email'], PDO::PARAM_STR);
        $query->execute();

        $cuantos = $query->rowCount();

        if ($cuantos != 1) {
            Sesion::add('feedback_negative', 'El usuario no se encuentra');
            return false;
        }

        $user = $query->fetch();

        if ($user->password != md5($datos['clave'])) {
            Sesion::add('feedback_negative', 'El usuario no se encuentra');
            return false;
        }

        Sesion::set('user_id', $user->id);
        Sesion::set('user_name', $user->nickname);
        Sesion::set('user_email', $user->email);
        Sesion::set('user_logged_in', true);
        Sesion::set('user_created_at', $user->created_at);
        return true;
    }

    public static function salir()
    {
        Sesion::destroy();
        header('location: /');
        exit();
    }

}