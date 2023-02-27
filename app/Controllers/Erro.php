<?php

namespace App\Controllers;

if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
/**
 * @copyright (c) 2022, Junior Silva
 */
class Erro
{
    private $dados;
    private $class;
    private $loadView;

    public function index()
    {
        $this->loadView = new \Core\ConfigView(
            "Views/Erro/Erro", 
            $this->dados
        );
        $this->loadView->renderizar();
    }
}
