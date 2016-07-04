<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:28
 */

?>
<!DOCTYPE html>
<html>
  <head>
    <?php //Charset?>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <?php //Meta tags?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php //Material Icons and Fonts?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php //Project stylesheet ?>
    <link rel="stylesheet" href="/admin/assets/stylesheet/style.css">
  </head>
  <body class="pg-<?=$pageName?>">
    <?php
      include $viewPageDir."/".$pageName.".php";
    ?>

    <?php //Jquery ?>
    <script src="/assets/javascript/vendor/jquery/jquery-2.2.3.min.js"></script>
    <?php //Materialize js ?>
    <script src="/assets/javascript/vendor/materialize/materialize.min.js"></script>
    <?php //Materialize js ?>
    <script src="/admin/assets/javascript/global/initialize.js"></script>
  <body>
</html>
