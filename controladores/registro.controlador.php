<?php

include "modelos/registro.modelo.php";

class ControladorRegistro{

    /*
    <!-- ========== Metodo agregar registro ========== -->    
    */
    
    static public function ctrRegistro(){

        if(isset($_POST["registroNombre"])){

            $tabla = "personas";

            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "telefono" => $_POST["registroTelefono"],
                "correo" => $_POST["registroEmail"],
                "clave" => $_POST["registroPassword"]            
            );

            $respuesta = ModeloRegistro::mdlRegistro($tabla, $datos);

            return $respuesta;

        }

    }


    /*
    <!-- ========== Metodo ingresar ========== -->    
    */

    static public function ctrIngresar(){

        public function ctrIngreso(){

            if(isset($_POST["ingresoCorreo"])){
    
                $tabla = "personas";                
                $item = "pers_correo";
                
                $valor = $_POST["ingresoCorreo"];
    
                $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);




    
                if($respuesta["correo"] == $_POST["ingresoEmail"] && $respuesta["clave"] == $_POST["ingresoPasword"]){ 
    
                    $_SESSION["validarIngreso"] = "ok";
    
                    echo '<script>
    
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
    
                        window.location = "index.php?pagina=inicio";
    
                    </script>';
    
                } else {
    
                    echo '<script>
    
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
    
                    </script>';
    
                    echo '<div class="alert alert-success">la contraseña no es valida</div>';
                }
    
    
            }
    
        }

    }
}