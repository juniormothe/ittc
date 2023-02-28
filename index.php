<?php
session_start();
ob_start();
require './core/GlobalFunctions.php';
require './core/Config.php';
require './vendor/autoload.php';

$Url = new Core\ConfigController();

if (MENU <> "ajax") {
    $loadView = new \Core\ConfigView("Views/Include/Header");
    $loadView->renderizar();
}

$Url->loadPage();

if (MENU <> "ajax") {
    $loadView = new \Core\ConfigView("Views/Include/Footer");
    $loadView->renderizar();
}
