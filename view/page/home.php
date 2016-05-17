<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:10
 */
require $controllerPageDir."/home.php";
?>
<body class="pg-<?=$pageName?>">
  <div class=" mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-desktop-drawer-button">
    <?php
    require $viewSectionDir."/header.php";
    ?>
    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="mdl-grid">
          <div class="mdl-layout-spacer"></div>

          <div class="mdl-cell mdl-cell--10-col">

            <div class="mdl-grid">

              <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                  <h2 class="mdl-card__title-text">Update</h2>
                </div>
                <div class="mdl-card__supporting-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Aenan convallis.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    View Updates
                  </a>
                </div>
              </div>

              <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                  <h2 class="mdl-card__title-text">Update</h2>
                </div>
                <div class="mdl-card__supporting-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Aenan convallis.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    View Updates
                  </a>
                </div>
              </div>

              <div class="mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title mdl-card--expand">
                  <h2 class="mdl-card__title-text">Update</h2>
                </div>
                <div class="mdl-card__supporting-text">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Aenan convallis.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                  <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                    View Updates
                  </a>
                </div>
              </div>

            </div>
          </div>

          <div class="mdl-layout-spacer"></div>

        </div>
      </div>
    </main>
    <?php //
    require $viewSectionDir."/footer.php";
    ?>
  </div>
</body>