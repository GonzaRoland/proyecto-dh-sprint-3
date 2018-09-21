<?php

class Validator
{
    public static function regValidate($data)
    {
        $errors = [];

        $username = trim($data['nombre']);
        if($username == "") {
            $errors['name'] = "Ingresá tu nombre.";
        }

        $username = trim($data['apellido']);
        if($username == "") {
            $errors['lastname'] = "Ingresá tu apellido.";
        }

        $username = trim($data['username']);
        if($username == "") {
            $errors['username'] = "Ingresá un nombre de usuario.";
        }

        $email = trim($data['email']);

        if($email == "") {
            $errors['email'] = "Ingresá un email válido.";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Ingresá un email válido.";
        }

        $password = trim($data['password']);
        $cpassword = trim($data['cpassword']);
        
        if($password == "") {
            $errors['password'] = "Ingresá una contraseña.";
        } elseif($password < 4) {
            $errors['password'] = "La contraseña debe tener al menos 4 caracteres.";
        }

        if($password != $cpassword) {
            $errors['cpassword'] = "Las contraseñas no coinciden";
        }

        if(!isset($data['confirm'])) {
            $errors['confirm'] = "Tenés que aceptar terminos y condiciones";
        }

        return $errors;

    }

    public static function fileValidate($data)
    {
        $errores = [];

        if ($data["avatar"]["error"] === UPLOAD_ERR_OK) 
        {
            $nombre = $data["avatar"]["name"];
            $ext = pathinfo($nombre, PATHINFO_EXTENSION);
            if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") 
            {
                $errores["avatar"] = "Solo admitimos formatos jpg y png";
            } 
            
        } 
        else 
        {
            $errores["avatar"] = "Hubo un error al procesar el archivo";
        }
        return $errores;
        }
        

    public static function logValidate($data)
    {
        $errors = [];

        $email = trim($data['email']);

        if($email == "") {
            $errors['email'] = "Ingresá un email válido.";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Ingresá un email válido.";
        }

        $password = trim($data['password']);
                
        if($password == "") {
            $errors['password'] = "Ingresá una contraseña.";
        }

        return $errors;
    }

    public function loginValidate($data, $usuario)
    {
        if ($usuario !== null) {

            if (password_verify($_POST['password'], $usuario['password']) !== true) {
                $errores['password'] = 'La combinación de email y contraseña no es válida.';
                } 
                  
            } else {
                $errores['password'] = 'La combinación de email y contraseña no es válida.';
            }

            return $errores;
    

    }
}