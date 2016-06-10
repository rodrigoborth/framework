<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:31
 */
//Get controller of header
require $controllerSectionDir."/header.php";
?>
<header>
  <nav class="red darken-4">
    <div class="nav-wrapper container">
      <a href="#" data-activates="mobile-side-bar" class="admin-button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
      <a href="#" class="brand-logo center">Borth System</a>
      <ul class="side-nav fixed" id="mobile-side-bar">
        <?php foreach($pageArray as $page): ?>
        <li class="<?= $page['class']; ?>">
          <a href="<?= $page['link']; ?>">
            <?= $page['name']; ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
</header>