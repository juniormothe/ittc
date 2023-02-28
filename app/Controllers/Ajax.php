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
        $_SESSION['image_type_one'] = classGoogleIcon(LEFT_RIGHT[rand(1, 10)], 'mega', 'danger');
        $_SESSION['image_type_two'] = classGoogleIcon(LEFT_RIGHT_REST[rand(1, 14)], 'mega', 'danger');
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
