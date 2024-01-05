<?php

namespace app\controllers;

use app\models\viewModels;

class viewControllers extends viewModels
{
    /*---------- Controlador obtener vistas ----------*/
    public function obtenerVistasControlador($vista)
    {
        if ($vista != "") {
            $respuesta = $this->obtenerVistasModelo($vista);
        } else {
            $respuesta = "login";
        }
        return $respuesta;
    }
}
