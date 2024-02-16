<?php

class usupro_controlador{

    public function __construct(){
        $this->obj= new Plantilla();
    }

    public function principal(){
        $this->obj->unirPagina("usupro
        /principal");
    }

    public function frmRegistrar(){}
    public function registrar(){}

    public function frmEditar(){}
    public function editar(){}

    public function eliminar(){}

    public function buscar(){}

}