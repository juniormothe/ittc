<?php

//Local
$http_https = 'http://';
define('GETT', filter_input_array(INPUT_GET,  FILTER_DEFAULT));
define('POSTT', filter_input_array(INPUT_POST, FILTER_DEFAULT));
define('URL', '' . $http_https . 'localhost/ittc/');
define('URL_ATUAL', $http_https . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define('IMG', '' . $http_https . 'localhost/ittc/assets/images/');
define('TITULO', 'ITTC');
define('LEFT_RIGHT', rand(1, 2));
define('LEFT_RIGHT_REST', rand(0, 2));
define('HOST', '');
define('PORT', '');
define('USER', '');
define('PASS', '');
define('DBNAME', '');
define('LIMIT_PG', 15);

//PRODUÇÃO
/*
$http_https = 'http://';
define('GETT', filter_input_array(INPUT_GET,  FILTER_DEFAULT));
define('POSTT', filter_input_array(INPUT_POST, FILTER_DEFAULT));
define('URL', '' . $http_https . 'localhost/ittc/');
define('URL_ATUAL', $http_https . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define('IMG', '' . $http_https . 'localhost/ittc/assets/images/');
define('TITULO', 'ITTC');
define('LEFT_RIGHT', rand(1, 2));
define('LEFT_RIGHT_REST', rand(0, 2));
define('HOST', '');
define('PORT', '');
define('USER', '');
define('PASS', '');
define('DBNAME', '');
define('LIMIT_PG', 15);
*/
if (!isset($_SESSION['start'])) {
    $_SESSION['start'] = 0;
}
if (!isset($_SESSION['stage'])) {
    $_SESSION['stage'] = 1;
}
if (!isset($_SESSION['second'])) {
    $_SESSION['second'] = 6;
}
if (!isset($_SESSION['type'])) {
    $_SESSION['type'] = 1;
}
if (!isset($_SESSION['image_type_one'])) {
    $_SESSION['image_type_one'] = '<img src="' . IMG . 'accuracy/' . rand(1, 2) . '.png" style="max-width: 50%;">';
}
if (!isset($_SESSION['image_type_two'])) {
    $_SESSION['image_type_two'] = '<img src="' . IMG . 'accuracy/' . rand(0, 2) . '.png" style="max-width: 50%;">';
}
if (isset(POSTT['second'])) {
    $_SESSION['second'] = POSTT['second'];
}
