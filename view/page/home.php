<?php
/**
 * Created by PhpStorm.
 * User: rodrigo
 * Date: 31/03/16
 * Time: 19:10
 */

//Get model of page
require $modelPageDir."/".$pageName.".php";
//Get controller of page
require $controllerPageDir."/".$pageName.".php";
//Get header of page
require $viewSectionDir."/header.php";
?>
<main>

</main>
<?php
//get footer of page
require $viewSectionDir."/footer.php";
?>