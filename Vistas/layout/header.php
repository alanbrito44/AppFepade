<?php

session_start();
if(!isset($_SESSION["usuario"]["nombre"])){
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../Recursos/Multimedia/Imagenes/favicon.png">
    <!-- Calendario -->
    <link href="../Recursos/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Form step activo_fijo -->
    <link href="../Recursos/vendor/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Estilos de las paginas -->
    <link href="../Recursos/CSS/style.css" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Script Creados -->
    <script src="../recursos/js/homejs.js" ></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">