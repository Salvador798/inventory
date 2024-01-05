<?php

require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

use app\controllers\categoryControllers;

if (isset($_POST['modulo_categoria'])) {
    $insCategory = new categoryControllers();
    if ($_POST['modulo_categoria'] == "registrar") {
        echo $insCategory->registrarCategoriaControlador();
    }
    if ($_POST['modulo_categoria'] == "eliminar") {
        echo $insCategory->eliminarCategoriaControlador();
    }
    if ($_POST['modulo_categoria'] == "actualizar") {
        echo $insCategory->actualizarCategoriaControlador();
    }
} else {
    session_destroy();
    header("location: " . APP_URL . "login/");
}
