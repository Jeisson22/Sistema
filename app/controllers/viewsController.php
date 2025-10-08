<?php
// Aca traemos las vista para controlarlo y traer el metodo del views
namespace app\controllers;

use app\models\viewsModel;

class viewsController extends viewsModel
{


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