<?php 
class programa_modelo {

    public static function registrar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "INSERT INTO t_programa(pro_uid,pro_nombre,pro_codigo)
        values
        (?,?,?)";

        $st = $con->prepare($sql);
        $uid = uniqid();
        $v = array(
            $uid,
            $info['nombre'],
            $info['codigo']);

        return $st->execute($v);
    }

    public static function listar(){
        $i = new conexion();
        $con = $i->getconexion();
        $sql = "SELECT * FROM t_programa";
        $st = $con->prepare($sql);
        $st->execute();
        return $st->fetchAll();
    }

    public static function eliminar($uid){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "DELETE FROM t_programa WHERE pro_uid = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        return $st->execute($v);
    }

    public static function buscarXuid($uid){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "SELECT * FROM t_programa WHERE pro_uid = ?";
        $st = $con->prepare($sql);
        $v = array($uid);
        $st->execute($v);
        return $st->fetch();
    }

    public static function actualizar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "UPDATE t_programa SET pro_nombre=? , pro_codigo=?  WHERE pro_uid=?"; 
        $st = $con->prepare($sql);
        $v = array(
            $info['nombre'], 
            $info['codigo'], 
            $info['uid'], 
         
        );
        return $st->execute($v); // retorna el valor numerico
    
    }  
}


