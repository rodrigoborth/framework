<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:10
 */
require $controllerPageDir."/contato.php";
?>
<body class="pg-<?=$pageName?>">
  <div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-desktop-drawer-button">
    <?php
    require $viewSectionDir."/header.php";
    ?>
    <main class="mdl-layout__content">
      <div class="page-content"><!-- Your content goes here --></div>
    </main>
    <?php //
    require $viewSectionDir."/footer.php";
    ?>
  </div>
</body>