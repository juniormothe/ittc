<?php
if (!defined('URL')) {
    header("Location: ../../../Erro");
    exit();
}
?>
<!DOCTYPE html>
<html class="no-js h-100" lang="pt-br">

<head>
    <title><?php echo TITULO; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="<?php echo IMG; ?>logo/favicon.ico" type="image/x-icon">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="<?php echo URL . "assets/"; ?>styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="<?php echo URL . "assets/"; ?>styles/extras.1.1.0.min.css">
    <link rel="stylesheet" href="<?php echo URL . "assets/"; ?>styles/style-travos.css">
    <link rel="stylesheet" href="<?php echo URL . "assets/styles/accents/secondary.1.1.0.css"; ?>">
    <link rel="stylesheet" href="<?php echo URL . "assets/"; ?>styles/notification.css">
    <script type="text/javascript" src="<?php echo URL; ?>assets/scripts/maskaras.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <style>
        footer.fixar-rodape {
            bottom: 0;
            left: 0;
            height: 40px;
            position: fixed;
            width: 100%;
        }
    </style>
</head>

<body class="h-100">
    <div class="container-fluid">
        <div class="row">