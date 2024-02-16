<?php
class inicio_modelo{

    public static function validar($usuario, $password){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = " SELECT usu_rol, usu_nombres, usu_apellidos FROM usuarios WHERE usu_email = ? AND usu_password=?";
        $st =$con->prepare($sql);
        $v = array($usuario, shal($password));
        $st->execute($v);
        return $st->fetch();
    }
}