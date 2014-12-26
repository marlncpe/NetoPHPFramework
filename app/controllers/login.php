<?php
require_once 'baseController.php';


class login extends baseController {
    public function __construct() {
        parent::__construct();
  
    }

    public function actualizar() {
        
    }

    public function crear() {
        
    }

    public function eliminar() {
        
    }

    public function index() {
        $this->cargar->layout("loginLayout");
        $this->cargar->helper("urlHelper");
        $login = new loginLayout();
        $atributos = array("tema"=>  urlHelper::baseUrl("css/temageneral.css"),"titulo"=>'Acceso',"etiqueta_usuario"=>'Nombre de usuario',"etiqueta_password"=>'Password',"pie"=>'Derechos Reservados &copy;2015 www.redaguascalientes.com');
        $vista =$login->construir($atributos);
        $forma = array("{login}"=>$vista);
        $this->cargar->vista("login",$forma);
        
        
        
        
    }

    public function leer() {
        
    }


}
