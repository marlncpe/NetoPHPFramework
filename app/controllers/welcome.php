<?php
require_once 'baseController.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome
 *
 * @author neto
 */
class Welcome extends baseController{
    function __construct() {
        parent::__construct();
      
        
        
    }
    
    

    public function actualizar() {
        
    }

    public function crear() {
         echo "crear!!";
        
    }

    public function eliminar() {
        
    
    }

    public function leer() {
        echo "Leer";
    }

    public function index() {
          $this->cargar->helper("urlHelper");
        $arreglo = array(
            "{titulo}" => "Neto Framework",
            "{css}" => urlHelper::baseUrl("css/temageneral.css")
        );
        $this->cargar->vista("welcome", $arreglo);
    }

//put your code here
}
