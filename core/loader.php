<?php

/**
 * Description of loader
 *
 * @author neto
 */
class loader {

    private $vista;

    function __construct() {
        
    }

    private function renderVista($vista, $datos) {
        $ruta = "./app/views/" . $vista . ".php";

        $archivo = file_get_contents($ruta);
        $llaves = array_keys($datos);
        $valores = array_values($datos);


        for ($i = 0; $i < count($datos); $i++) {
            $cadena = str_replace($llaves, $valores, $archivo);
           
        }



        echo $cadena;
    }

    /**
     * Carga la vista
     * @param type $vista
     */
    public function vista($vista, $datos) {
        if ($datos == null) {
            $ruta = "./app/views/" . $vista . ".php";
            require_once $ruta;
        } else {
            $this->renderVista($vista, $datos);
        }
    }

    /**
     * Carga Modelos
     * @param type $modelo
     */
    public function modelo($modelo) {
        include_once './app/models/' . $modelo.".php";
    }

    /**
     * Carga Helper
     * @param type $helper
     */
    public function helper($helper) {
        include_once './core/helpers/' . $helper.".php";
    }

    public function libreria($libreria) {
        include_once './core/libs/' . $libreria.".php";
    }
    
        public function layout($layout) {
        include_once './core/layouts/' . $layout.".php";
    }

}
