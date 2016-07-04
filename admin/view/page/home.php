<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:10
 */

//Get controller of page
require $controllerPageDir."/".$pageName.".php";
//Get header of page
require $viewSectionDir."/header.php";
?>
<main>
  <div class="row">
    <div class="container">

    </div>
  </div>
</main>
<?php
//get footer of page
require $viewSectionDir."/footer.php";
?>