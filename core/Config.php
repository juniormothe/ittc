<?php

//Local
$http_https = 'http://';
define('GETT', filter_input_array(INPUT_GET,  FILTER_DEFAULT));
define('POSTT', filter_input_array(INPUT_POST, FILTER_DEFAULT));
define('URL', '' . $http_https . 'localhost/ittc/');
define('URL_ATUAL', $http_https . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define('IMG', '' . $http_https . 'localhost/ittc/assets/images/');
define('TITULO', 'ITTC');
define('LEFT_RIGHT', [
    1=>'f1e6', 
    2=>'f1df', 
    3=>'f1e6', 
    4=>'f1df', 
    5=>'f1e6', 
    6=>'f1df', 
    7=>'f1e6', 
    8=>'f1df', 
    9=>'f1e6', 
    10=>'f1df'
]);
define('LEFT_RIGHT_REST', [
    1=>'e5cd', 
    2=>'f1e6', 
    3=>'f1df', 
    4=>'e5cd', 
    5=>'f1e6', 
    6=>'f1df', 
    7=>'e5cd', 
    8=>'f1e6', 
    9=>'f1df', 
    10=>'e5cd', 
    11=>'f1e6', 
    12=>'f1df', 
    13=>'e5cd', 
    14=>'f1e6', 
    15=>'f1df'
]);
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
define('URL', 'http://34.151.243.222/ittc/');
define('URL_ATUAL', $http_https . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
define('IMG', 'http://34.151.243.222/ittc/assets/images/');
define('TITULO', 'ITTC');
define('LEFT_RIGHT', [
    1=>'f1e6', 
    2=>'f1df', 
    3=>'f1e6', 
    4=>'f1df', 
    5=>'f1e6', 
    6=>'f1df', 
    7=>'f1e6', 
    8=>'f1df', 
    9=>'f1e6', 
    10=>'f1df'
]);
define('LEFT_RIGHT_REST', [
    1=>'e5cd', 
    2=>'f1e6', 
    3=>'f1df', 
    4=>'e5cd', 
    5=>'f1e6', 
    6=>'f1df', 
    7=>'e5cd', 
    8=>'f1e6', 
    9=>'f1df', 
    10=>'e5cd', 
    11=>'f1e6', 
    12=>'f1df', 
    13=>'e5cd', 
    14=>'f1e6', 
    15=>'f1df'
]);
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
    $_SESSION['image_type_one'] = sizeAccuracy(LEFT_RIGHT[rand(1, 10)], 'danger');
}
if (!isset($_SESSION['image_type_two'])) {
    $_SESSION['image_type_two'] = sizeAccuracy(LEFT_RIGHT_REST[rand(1, 15)], 'danger');
}
if (isset(POSTT['second'])) {
    $_SESSION['second'] = POSTT['second'];
}
