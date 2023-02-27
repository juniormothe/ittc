<?php

namespace App\Controllers;

if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
/**
 * @copyright (c) 2023, Junior Silva
 */
class Ajax
{
    private $stage;
    private $settings;

    public function __construct()
    {
        if ((empty(VIEW)) or (VIEW == "null")) {
            $this->settings['start'] = $_SESSION['start'];
            $this->settings['stage'] = $_SESSION['stage'];
            $this->settings['second'] = $_SESSION['second'];
            $this->settings['type'] = $_SESSION['type'];
        } else {
            $this->settings = json_decode(VIEW, true);
        }
    }

    public function index()
    {
    }

    public function execute()
    {
        if ($this->settings['start'] == 1) {
            $_SESSION['stage'] = ($_SESSION['stage'] + 1);
        }
        $_SESSION['image_type_one'] = '<img src="' . IMG . 'accuracy/' . rand(1, 2) . '.png" style="max-width: 50%;">';
        $_SESSION['image_type_two'] = '<img src="' . IMG . 'accuracy/' . rand(0, 2) . '.png" style="max-width: 50%;">';
    }

    public function displayStage()
    {
        echo "STAGE: " . $_SESSION['stage'];
    }

    public function displayImage()
    {
        if ($this->settings['type'] == 1) {
            echo $_SESSION['image_type_one'];
        } elseif ($this->settings['type'] == 2) {
            echo $_SESSION['image_type_two'];
        }
    }
}
