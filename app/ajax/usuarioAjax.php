<?php

require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

use app\controllers\userControllers;

if (isset($_POST['modulo_usuario'])) {
    $insUsuario = new userControllers();
    if ($_POST['modulo_usuario'] == "registrar") {
        echo $insUsuario->registrarUsuarioControlador();
    }
    if ($_POST['modulo_usuario'] == "eliminar") {
        echo $insUsuario->eliminarUsuarioControlador();
    }
    if ($_POST['modulo_usuario'] == "actualizar") {
        echo $insUsuario->actualizarUsuarioControlador();
    }
} else {
    session_destroy();
    header("location: " . APP_URL . "login/");
}
