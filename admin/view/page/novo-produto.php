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
      <div class="row">
        <form class="col s12 sg-form card-panel">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input disabled value="I am not editable" id="disabled" type="text" class="validate">
              <label for="disabled">Disabled</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
<?php
//get footer of page
require $viewSectionDir."/footer.php";
?>