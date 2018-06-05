<?php
/**
 * Created by PhpStorm.
 * User: fulgen
 * Date: 3/05/18
 * Time: 21:51
 */

namespace Mini\Model;


use Mini\Core\Database;
use Mini\Libs\Sesion;

class Contact
{
    public static function insert($datos)
    {
        $errores_validacion = false;
        if (!$datos) {
            self::add("feedback_negative", "No he recibido los datos de contacto");
            return false;

        }
        if (empty($datos['first_name'])) {
            self::add("feedback_negative", "No se ha indicado el nombre");
            $errores_validacion = true;
        }
        if (empty($datos['last_name'])) {
            self::add("feedback_negative", "No se ha indicado los apellidos");
            $errores_validacion = true;
        }
        if (empty($datos['email'])) {
            self::add("feedback_negative", "No se ha indicado el email");
            $errores_validacion = true;
        }
        if (empty($datos['subject'])) {
            self::add("feedback_negative", "No se ha indicado el asunto");
            $errores_validacion = true;
        }
        if (empty($datos['message'])) {
            self::add("feedback_negative", "No se ha indicado el mensaje");
            $errores_validacion = true;
        }

        $datos['email'] = trim($datos['email']);
        if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {

            self::add("feedback_negative", "El email debe ser válido");
            $errores_validacion = true;

        }

        if (self::get('feedback_negative')) {
            return false;
        }
        if ($errores_validacion) {
            return false;
        }
        $params = [':first_name' => $datos['first_name'],
            ':last_name' => $datos['last_name'],
            ':email' => $datos['email'],
            ':subject' => $datos['subject'],
            ':message' => $datos['message'],
            'created_at'    =>  date('Y-m-d H:i:s'),
            'updated_at'    =>  date('Y-m-d H:i:s')
        ];

        $conn = Database::getInstance()->getDatabase();
        $ssql = "INSERT INTO contacts (first_name, last_name, email, subject, message, created_at, updated_at) 
				 VALUES (:first_name, :last_name, :email, :subject, :message, :created_at, :updated_at)";
        $query = $conn->prepare($ssql);
        $query->execute($params);

        $cuenta = $query->rowCount();
        if ($cuenta == 1)
            self::add('feedback_positive', 'Mensage enviado con éxito, gracias!!');
        return $conn->lastInsertId();

        return false;

    }

    public static function add($key, $value)
    {
        $_POST[$key][] = $value;
    }

    public static function get($key)
    {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
    }
}