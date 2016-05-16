<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:10
 */
require $controllerPageDir."/empresa.php";
?>
<body class="pg-<?=$pageName?>">
  <div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-desktop-drawer-button">
    <?php
      //Header
      require $viewSectionDir."/header.php";
    ?>
    <main class="mdl-layout__content">
      <div class="page-content">
        <?php //Page content ?>
        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
          <?php //Tabs selector ?>
          <div class="mdl-tabs__tab-bar">
            <a href="#tab1" class="mdl-tabs__tab is-active">Visão</a>
            <a href="#tab2" class="mdl-tabs__tab">Sobre nós</a>
            <a href="#tab3" class="mdl-tabs__tab">Equipe</a>
          </div>
          <?php //Tabs Content ?>
          <div class="mdl-tabs__panel is-active" id="tab1">
            <div class="mdl-grid">
              <div class="mdl-layout-spacer"></div>
              <div class="mdl-cell--10-col" style="background: red;">
                Saquê é uma grid de 10 col com centralizador
              </div>
              <div class="mdl-layout-spacer"></div>
            </div>
          </div>
          <div class="mdl-tabs__panel" id="tab2">
            <div class="mdl-grid">
              <div class="mdl-cell--10-col" style="background: red;">
                Saquê é uma grid de 10 col sem centralizador
              </div>
            </div>
          </div>
          <div class="mdl-tabs__panel" id="tab3">
            <div class="mdl-grid">
              <div class="mdl-layout-spacer"></div>
              <div class="mdl-cell--8-col" style="background: red;">
                Saquê é uma grid de 8 col com centralizador
              </div>
              <div class="mdl-layout-spacer"></div>
            </div>
          </div>
        </div>

      </div>
    </main>
    <?php
      //Footer
      require $viewSectionDir."/footer.php";
    ?>
  </div>
</body>