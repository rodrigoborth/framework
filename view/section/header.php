<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:31
 */
require $controllerSectionDir."/header.php";
?>
<header class="mdl-layout__header">
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <span class="mdl-layout-title"><?=ucwords(strtolower($pageName));?></span>
    <!-- Add spacer, to align navigation to the right -->
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation. We hide it in small screens. -->
    <nav class="mdl-navigation mdl-layout--large-screen-only">
      <a class="mdl-navigation__link" href="<?=$htmlRoot?>">Home</a>
      <a class="mdl-navigation__link" href="<?=$htmlRoot?>empresa">Empresa</a>
      <a class="mdl-navigation__link" href="<?=$htmlRoot?>">Link</a>
      <a class="mdl-navigation__link" href="<?=$htmlRoot?>contato">Contato</a>
    </nav>
  </div>
</header>
<div class="mdl-layout__drawer">
  <span class="mdl-layout-title">Menu</span>
  <nav class="mdl-navigation">
    <a class="mdl-navigation__link" href="<?=$htmlRoot?>">Home</a>
    <a class="mdl-navigation__link" href="<?=$htmlRoot?>empresa">Empresa</a>
    <a class="mdl-navigation__link" href="<?=$htmlRoot?>">Link</a>
    <a class="mdl-navigation__link" href="<?=$htmlRoot?>contato">Contato</a>
  </nav>
</div>