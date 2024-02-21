<?php
class usuario_modelo {

    public static function registrar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "INSERT INTO usuarios(usu_uid,usu_nombres,usu_apellidos,usu_email,usu_contraseña,usu_telefono,usu_fch_nac,usu_rol)
        values
        (?,?,?,?,?,?,?,?)";

        $st = $con->prepare($sql);
        $uid = uniqid();
        $v = array(
            $uid,
            $info['nombres'], 
            $info['apellidos'], 
            $info['email'],
            sha1( 
            $info['password']),
            $info['telefono'], 
            $info['fecha_nac'],
            $info['rol']);

        return $st->execute($v); // retorna el valor numerico

    }

    public static function listar(){
        $i = new conexion();
        $con = $i->getconexion();
        $sql= "SELECT * FROM usuarios";
        $st = $con->prepare($sql);
        $st->execute();
        return $st->fetchAll();
    
    }

    public static function buscarXEmail($email){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "SELECT usu_email FROM usuarios WHERE usu_email = ?";
        $st = $con->prepare($sql);
        $v = array($email);
        $st->execute($v);
        return $st->fetch();
    }

    
    public static function eliminar($uid){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "DELETE FROM usuarios WHERE usu_uid = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        return $st->execute($v);
    }

    public static function buscarXuid($uid){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "SELECT * FROM usuarios WHERE usu_uid = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        $st->execute($v);
        return $st->fetch();
    }
    public static function actualizar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "UPDATE usuarios SET usu_nombres=? , usu_apellidos=? , usu_email=? , usu_telefono=? , usu_fch_nac=? WHERE usu_uid=?"; 
        $st = $con->prepare($sql);
        $v = array(
            $info['nombres'], 
            $info['apellidos'], 
            $info['email'],
            $info['telefono'], 
            $info['fecha_nac'],
            $info['uid']
        );
        return $st->execute($v); // retorna el valor numerico
    
    }  
}