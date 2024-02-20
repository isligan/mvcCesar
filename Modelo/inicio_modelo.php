<?php
class inicio_modelo{

    public static function validarUsuario($usuario, $password){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = " SELECT usu_rol, usu_nombres, usu_apellidos, usu_uid FROM usuarios WHERE usu_email = ? AND usu_contraseña=?";
        $st =$con -> prepare ($sql);
        
        $v = array($usuario, sha1($password));
        $st->execute($v);
    
        return $st->fetch();
    }
}

