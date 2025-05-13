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


   /*=============================================
    Seleccionar Registros
    =============================================*/

    static public function ctrSeleccionarRegistro(){

        $tabla = "personas";

        $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, null,null);

        return $respuesta;
    }

    /*
    <!-- ========== Metodo ingresar ========== -->    
    */



    /*=============================================
    Ingresar Usuario
    =============================================*/

// public function ctrIngresar() {

//     if (isset($_POST["ingresoCorreo"])) {

//         $tabla = "personas";
//         $item = "pers_correo";
//         $valor = $_POST["ingresoCorreo"];

//         $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);

//         if ($respuesta["pers_correo"] == $_POST["ingresoCorreo"] && $respuesta["pers_correo"] == $_POST["ingresoCorreo"] &&
//             password_verify($_POST["ingresoClave"], $respuesta["pers_clave"])) {

//             $_SESSION["validarIngreso"] = "ok";

//             echo '<script>
//                 if (window.history.replaceState) {
//                     window.history.replaceState(null, null, window.location.href);
//                 }
//                 window.location = "index.php?modulo=contenido";
//             </script>';

//         } else {
//             echo '<script>
//                 if (window.history.replaceState) {
//                     window.history.replaceState(null, null, window.location.href);
//                 }
//             </script>';

//             echo '<div class="alert alert-danger">Correo o contraseña incorrectos</div>';
//         }
//     }
// }

    static public function ctrIngresar(){

         if(isset($_POST["ingresoCorreo"])){
    
                $tabla = "personas";

                $item = "pers_correo";

                $valor = $_POST["ingresoCorreo"];
    
                $respuesta = ModeloRegistro::mdlSeleccionarRegistro($tabla, $item, $valor);

    
                if($respuesta["pers_correo"] == $_POST["ingresoCorreo"] && $respuesta["pers_clave"] == $_POST["ingresoClave"]){ 
    
                    $_SESSION["validarIngreso"] = "ok";
    
                    echo '<script>
    
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
    
                        window.location = "index.php?modulo=contenido";
    
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

    /*=============================================
    Actualizar Usuario
    =============================================*/

    public static function ctrActualizar() {
        
        if (isset($_POST['actualizarNombre'], $_POST['actualizarTelefono'], $_POST['actualizarCorreo'], $_POST['actualizarClave'])) {

            $tabla = "personas";

            $datos = array(
                "id" => $_GET["id"], 
                "nombre" => $_POST["actualizarNombre"],
                "telefono" => $_POST["actualizarTelefono"],
                "correo" => $_POST["actualizarCorreo"],
                "clave" => password_hash($_POST["actualizarClave"], PASSWORD_DEFAULT)
            );

            $respuesta = ModeloRegistro::mdlActualizarRegistro($tabla, $datos);

            return $respuesta;
        }

        return null;
    }




}