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
  <?php //Meta tags?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php //Material design css ?>
  <link rel="stylesheet" href="assets/stylesheet/vendor/material/material.min.css">
  <?php //Material design font-family and icons ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <?php //Project stylesheet ?>
  <link rel="stylesheet" href="assets/stylesheet/style.css">

  <?php //Material design js ?>
  <script src="assets/javascript/vendor/material/material.min.js"></script>
</head>
<?php
  require $viewPageDir."/".$pageName.".php";
?>
</html>
