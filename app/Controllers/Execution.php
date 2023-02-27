<?php

namespace App\Controllers;

if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
/**
 * @copyright (c) 2023, Junior Silva
 */
class Execution
{
    private $dados;
    private $class;
    private $loadView;

    public function __construct()
    {
        
    }

    public function index()
    {
        $this->loadView = new \Core\ConfigView(
            "Views/Execution/Execution", 
            $this->dados
        );
        $this->loadView->renderizar();
    }
}
