<?php

namespace App\Controllers;

if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
/**
 * @copyright (c) 2023, Junior Silva
 */
class Home
{
    private $dados;
    private $class;
    private $loadView;

    public function __construct()
    {
        $_SESSION['stage'] = 1;
    }

    public function index()
    {
        $this->loadView = new \Core\ConfigView(
            "Views/Home/Home",
            $this->dados
        );
        $this->loadView->renderizar();
    }
}
