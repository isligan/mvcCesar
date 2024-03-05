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
     
       public function frmEditar(){
          $uid = $_GET["uid"];
          $this->obj->infoprograma = programa_modelo::buscarXuid($uid);
          $this->obj->unirpagina("programa/frmEditar");
     }
     public function editar(){
      
                  if(isset($_POST['nombre']) && isset($_POST['codigo'])){
                      extract($_POST);
                      if(trim($nombre)=="" && trim($codigo)==""){
                          echo json_encode(array("estado"=>2,"mensaje"=>"Todos los campos son obligatorios"));
                      }else{
                          $datos['nombre'] = $nombre;
                          $datos['codigo'] = $codigo;
                          $datos['uid'] = $uid;
                      
                          $res = programa_modelo::actualizar($datos);
                          if ($res > 0)
                             echo json_encode(array("estado"=>1, "mensaje"=>"Editado","icono"=>"success"));
                          else
                             echo json_encode(array("estado"=>2, "mensaje"=>"Error al editar","icono"=>"error"));
  
                          }
                  }else{
                      echo json_encode(array("estado"=>3, "mensaje"=> "faltan parametros", "icono"=>"error"));
                  }
              }

              public function eliminar(){
                if (isset($_GET["uid"])){
                    $uid = $_GET["uid"];
                    $res = programa_modelo::eliminar($uid);
                    if ($res > 0)
                        echo json_encode(array("mensaje" => "Se eliminó el registro", "estado" => 1));
                    else
                        echo json_encode(array("mensaje" => "Error al eliminar el registro", "estado" => 2));
                } else {
                    echo json_encode(array("mensaje" => "Falta el parámetro UID", "estado" => 3));
                }
            }
            

       public function buscar(){}
        

}
?>