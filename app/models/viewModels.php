<?php

namespace app\models;

class viewModels
{
    /*---------- Modelo obtener vista ----------*/
    protected function obtenerVistasModelo($vista)
    {
        $listaBlanca = ["categoryList", "categoryNew", "categorySearch", "categoryUpdate", "company", "dashboard", "productNew", "productSearch", "productCategory", "productList", "productUpdate", "userList", "userNew", "userSearch", "userUpdate", "logOut"];
        if (in_array($vista, $listaBlanca)) {
            if (is_file("./app/views/contents/" . $vista . "-view.php")) {
                $contenido = "./app/views/contents/" . $vista . "-view.php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
