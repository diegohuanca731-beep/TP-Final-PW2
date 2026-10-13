<?php

namespace app\controller;

class IntegrantesController
{

    private $render;

    public function __construct($render)
    {
        $this->render = $render;
    }

    public function viewIntegrantes()
    {
        $data = [
            "nombre_equipo" => "Grupo PW2",
            "integrantes" => [
                ["nombre" => "Diego"],
                ["nombre" => "Edson"],
                ["nombre" => "Agustin"],
                ["nombre" => "Mauricio"],
                ["nombre" => "Lucas"]
            ]
        ];

        $this->render->renderiza("integrantes", $data);
    }
}