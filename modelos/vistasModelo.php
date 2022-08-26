<?php

class vistasModelo{

        /* ----Modelo para obtener las vista-----*/
    
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca=[];
            if (in_array($vistas, $listaBlanca)) { //si el valor q viene en la url esta en la lista blanca
                if (is_file("./vistas/contenidos/".$vistas."-view.php")) { //ingreso a carpeta donde estan las vistas disponibles para mostrar y si lo encuentro
                    $contenido="./vistas/contenidos/".$vistas."-view.php"; //devuelvo el archivo si se encuentra
                }else{
                    $contenido="404";// si no se encuentra devuelvo pag error 404 
                }
                
            }elseif($vistas == "login"|| $vistas =="index"){ //si el valor es login o index muestre inicio de sesion
                $contenido="login";

            }else{
                $contenido="404";// y si no coincide pagina no se encuentra muestra error 404
            }
            return $contenido;
        }

}