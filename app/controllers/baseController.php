<?php

$ruta = "././core/loader.php";
 if (file_exists($ruta)) {
     require_once $ruta;
}  else {
    echo "No existe 1";
}

/**
 * Description of baseController
 *
 * @author neto
 */


abstract class baseController {
    
    protected $cargar;
    
            
    function __construct() {
       
        $this->cargar = new loader();
        
    }
    public abstract function index();

    //CRUD
    public abstract function crear();
    public abstract function leer();
    public abstract function actualizar();
    public abstract function eliminar();
    
   
   
    
}
