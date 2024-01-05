<?php

require_once "../../config/app.php";
require_once "../views/inc/session_start.php";
require_once "../../autoload.php";

use app\controllers\companyControllers;

if (isset($_POST['modulo_empresa'])) {
    $insEmpresa = new companyControllers();
    if ($_POST['modulo_empresa'] == "registrar") {
        echo $insEmpresa->registrarEmpresaControlador();
    }
    if ($_POST['modulo_empresa'] == "actualizar") {
        echo $insEmpresa->actualizarEmpresaControlador();
    }
} else {
    session_destroy();
    header("location: " . APP_URL . "login/");
}
