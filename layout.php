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

  <?php //Materialize css ?>
  <link rel="stylesheet" href="assets/stylesheet/vendor/materialize/materialize.min.css">

  <?php //Project stylesheet ?>
  <link rel="stylesheet" href="assets/stylesheet/style.css">

</head>
<body class="pg-<?=$pageName?>">
<?php
  require $viewPageDir."/".$pageName.".php";
?>

<?php //Jquery ?>
<script src="assets/javascript/vendor/jquery/jquery-2.2.3.min.js"></script>

<?php //Materialize js ?>
<script src="assets/javascript/vendor/materialize/materialize.min.js"></script>
<body>
</html>
