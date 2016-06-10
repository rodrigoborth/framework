<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:31
 */
//Get model of header
//Get controller of header
require $controllerSectionDir."/header.php";
?>
<header>
  <div class="navbar-fixed">
    <nav class="red darken-4">
      <div class="nav-wrapper container">
        <a href="#" data-activates="mobile-side-bar" class="button-collapse right"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo left">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Components</a></li>
          <li><a href="#">JavaScript</a></li>
        </ul>
        <ul class="side-nav" id="mobile-side-bar">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Components</a></li>
          <li><a href="#">JavaScript</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>