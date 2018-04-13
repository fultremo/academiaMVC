<?php

namespace Mini\Model;
use Mini\Libs\Sesion;
use Mini\Core\Database;
/**
 *
 */
class Registro
{

    public static function insert($datos)
    {
        $errores_validacion = false;
        if (!$datos) {
            Sesion::add("feedback_negative", "No he recibido los datos de registro");
            return false;

        }
        if (empty($datos['first_name'])) {
            Sesion::add("feedback_negative", "No se ha indicado el first_name");
            $errores_validacion = true;
        }
        if (empty($datos['last_name'])) {
            Sesion::add("feedback_negative", "No se ha indicado el last_name");
            $errores_validacion = true;
        }
        if (empty($datos['email'])) {
            Sesion::add("feedback_negative", "No se ha indicado el email");
            $errores_validacion = true;
        }
        if (empty($datos['nickname'])) {
            Sesion::add("feedback_negative", "No se ha indicado el nickname");
            $errores_validacion = true;
        }

        $datos['email'] = trim($datos['email']);
        if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {

            Sesion::add("feedback_negative", "El email debe ser válido");
            $errores_validacion = true;

        }
        if (! isset($datos['clave']) || ! isset($datos['clave2'])) {
            Sesion::add("feedback_negative", "No he recibido ambas claves");
            $errores_validacion = true;

        }else {
            if ($datos['clave'] != $datos['clave2']) {
                Sesion::add("feedback_negative", "Las claves tienen que ser iguales");
                $errores_validacion = true;
            }
            if (strlen($datos['clave'])<6) {
                Sesion::add("feedback_negative", "La contraseña debe tener al menos 6 caracteres");
                $errores_validacion = true;
            }
            $exp = ["options" => ["regexp" => "/[0-9][a-z][0-9][A-Z][0-9][a-z]+$/"]];
            if (!filter_var($datos['clave'], FILTER_VALIDATE_REGEXP,$exp)){
                Sesion::add("feedback_negative", "La contraseña debe tener al menos una mayúscula, una minúscula y un dígito");
                $errores_validacion = true;
            }
        }

        if (Sesion::get('feedback_negative')) {
            return false;
        }
        if ($errores_validacion) {
            return false;
        }
        $params = [':first_name' => $datos['first_name'],
            ':last_name' => $datos['last_name'],
            ':nickname' => $datos['nickname'],
            ':email' => $datos['email'],
            ':clave' => md5($datos['clave']),
            'created_at'    =>  date('Y-m-d H:i:s'),
            'updated_at'    =>  date('Y-m-d H:i:s')
        ];

        $conn = Database::getInstance()->getDatabase();
        $ssql = "INSERT INTO users (first_name, last_name, nickname, email, password, created_at, updated_at) 
				 VALUES (:first_name, :last_name, :nickname, :email, :clave, :created_at, :updated_at)";
        $query = $conn->prepare($ssql);
        $query->execute($params);

        $cuenta = $query->rowCount();
        if ($cuenta == 1)
            Sesion::add('feedback_positive', 'Registrado con éxito, gracias!!');
        return $conn->lastInsertId();

        return false;

    }

}