<?php
class inicio_controlador{
    public function __construct(){
        $this-> obj= new Plantilla();
    }

    public function principal() {
        $this-> obj->unirPagina("Inicio/frmLogin", false);
    }

    public function frmLogin() {
        
        $this-> obj->unirPagina("Inicio/frmLogin");
       
    }

    public function cerrarSession() {
    }
}
?>