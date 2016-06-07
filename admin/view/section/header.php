<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:31
 */
//Get model of header
require $modelSectionDir."/header.php";
//Get controller of header
require $controllerSectionDir."/header.php";
?>
<header>
  <nav class="red darken-4">
    <div class="nav-wrapper container">
      <a href="#" data-activates="mobile-side-bar" class="admin-button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
      <a href="#" class="brand-logo center">Borth System</a>
      <ul class="side-nav" id="mobile-side-bar">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Components</a></li>
        <li><a href="#">JavaScript</a></li>
      </ul>
    </div>
  </nav>
</header>