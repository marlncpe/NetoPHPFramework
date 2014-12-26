<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bootstrap
 *
 * @author neto
 */
class bootstrap {

    public function __construct() {
        
    }

    public function run() {
        $url = $_SERVER['REQUEST_URI'];
        $parte = explode("/", $url);
//        echo "conteo: ".  count($parte);
//        print_r($parte);

        switch (count($parte)) {
            case 3:
                $controlador = "welcome";

                require_once 'app/controllers/' . $controlador . ".php";
                $obj = new $controlador();
                $obj->index();
                


                break;
            case 4:
                $controlador = $parte[3];
                $ruta = 'app/controllers/' . $controlador . ".php";
                if (file_exists($ruta)) {

                    require_once $ruta;
                    $obj = new $controlador();
                    $obj->index();
                } else {
                    $controlador = "error";
                    $ruta = 'app/controllers/' . $controlador . ".php";
                    require_once $ruta;
                    $obj = new $controlador();
                }
                break;
            case 5:
                $controlador = $parte[3];
                $metodo = $parte[4];
                $ruta = 'app/controllers/' . $controlador . ".php";
                if (file_exists($ruta)) {

                    require_once $ruta;
                    $obj = new $controlador();
                    $obj->$metodo();
                } else {
                    $ruta = 'app/controllers/' . "error" . ".php";
                    require_once $ruta;
                    $obj = new error();
                    $obj->index();
                }

                break;

            default:
                $ruta = 'app/controllers/' . "error" . ".php";
                    require_once $ruta;
                    $obj = new error();
                    $obj->index();
                break;
        }
    }

}
