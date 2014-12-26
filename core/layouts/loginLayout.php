<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginLayout
 *
 * @author neto
 */
class loginLayout {

    public function __construct() {
       
    }
  /**
   * 
   * @param type $atributos
   */
    public function construir($atributos) {
         echo
            "   
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Acceso</title>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
                    <link rel='stylesheet' href=".$atributos['tema'].">
                 </head>
                 <body>
                <fieldset>
                <legend>".$atributos['titulo']."</legend>
                    <table>
                        <tr>
                             <td>".$atributos['etiqueta_usuario']."</td>
                             <td><input type='text' id='txtUsuario' placeholder='Usuario'></td>
                        </tr>
                        <tr>
                             <td>".$atributos['etiqueta_password']."</td>
                             <td><input id='txtPassword' type='password' placeholder='Contraseña'></td>
                        </tr>
                        <tr>
                            <td><button id='btnIngresar'>Ingresar</button></td>
                        </tr>
                    </table>
                </fieldset>
                
                <footer>
                    ".$atributos['pie']."
                </footer>
                <script src=".$atributos['script']."></script>
                </body>
                </html>
            ";
    }

}
