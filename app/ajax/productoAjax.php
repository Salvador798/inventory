<?php

require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

use app\controllers\productControllers;

if (isset($_POST['modulo_producto'])) {
    $insProducto = new productControllers();
    if ($_POST['modulo_producto'] == "registrar") {
        echo $insProducto->registrarProductoControlador();
    }
    if($_POST['modulo_producto']=="eliminar"){
        echo $insProducto->eliminarProductoControlador();
    }
    if($_POST['modulo_producto']=="actualizar"){
        echo $insProducto->actualizarProductoControlador();
    }
} else {
    session_destroy();
    header("location: " . APP_URL . "login/");
}
