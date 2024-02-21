<?php
    require_once "Modelo/programa_modelo.php";
    class programa_controlador{

       public function __construct(){
        $this->obj= new plantilla();
       }

       public function principal(){
            $this->obj->programa = programa_modelo::listar();
            $this->obj-> unirpagina("programa/principal");
       }
       public function frmRegistrar(){
            $this->obj-> unirpagina("programa/frmRegistrar");
       }


       public function registrar(){
          if(isset($_POST['nombre']) && isset($_POST['codigo'])){
               extract($_POST);
   
               $datos['nombre'] = $nombre;
               $datos['codigo'] = $codigo;
               $res= programa_modelo:: registrar($datos);
               if ($res > 0)
                echo json_encode(array("mensaje" => "se registro", "estado" =>1));
           }else{
               header('location: /controladores');
           }
   
       }
     
       public function frmEditar(){}
       public function editar(){}

       public function Elimnar(){}

       public function buscar(){}
        

}
?>