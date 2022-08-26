<?php 

    require_once "./modelos/vistasModelo.php";

    class vistasControlador extends vistasModelo{
        /* ----Controlador para obtener plantillas-----*/

        public function obterner_plantilla_controlador(){
            return require_once "./vistas/plantilla.php";

        }

        /* ----Controlador para obtener vista-----*/
        public function obterner_vistas_controlador(){
            if (isset($_GET['views'])) {
                $ruta= explode("/", $_GET['views']);
                $respuesta = vistasModelo::obtener_vistas_modelo($ruta[0]);
            }else{
                $respuesta="login";
            }
            return $respuesta;

        }

}