<?php 
class programa_modelo {

    public static function registrar($info){
        $i = new conexion();
        $con = $i->getConexion();
        $sql = "INSERT INTO t_programa(pro_id,pro_uid,pro_nombre,pro_codigo)
        values
        (?,?,?,?)";

        $st = $con->prepare($sql);
        $uid = uniqid();
        $v = array(
            $uid,
            $info['nombres'],
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

    public static function eliminar(){

    }

    public static function actualizar(){
        
    }
}