<?php
require_once "Modelo/inicio_modelo.php";
class inicio_controlador{
    public function __construct(){
        $this-> obj= new Plantilla();
    }

    public function principal() {
        $this-> obj->unirPagina("Inicio/frmLogin", false);
    }

    public function dashboard() {

        if(!isset($_SESSION["usu_uid"]))
        header("location: /Controladores");


        $this-> obj->unirPagina("Inicio/principal");
    }

    public function frmLogin() {
        
        $this-> obj->unirPagina("Inicio/frmLogin");
       
    }

    public function validarUsuario(){
        extract($_POST);
        if(isset($email)  &&  isset($password)){
            $res = inicio_modelo::validarUsuario($email, $password);
            if(is_array($res)){
                $_SESSION['usu_nombres']   = $res["usu_nombres"];
                $_SESSION['usu_apellidos'] = $res["usu_apellidos"];
                $_SESSION['usu_uid']       = $res["usu_uid"];
                $_SESSION['usu_rol']       = $res["usu_rol"];
                echo json_encode(array("estado"=>1, "mensaje"=>"Bienvenido"));
            }else{
                echo json_encode(array("estado"=>2, "mensaje"=>"Usuario/password errados"));
            }
        }else{
            echo json_encode(array("estado"=>2, "mensaje"=>"faltan parametros"));
        }
    }



    public function cerrarSession() {
        session_destroy();
        header("location: /Controladores");
    }
}
?>