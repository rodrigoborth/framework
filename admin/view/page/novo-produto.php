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
        <form class="col s12 sg-form card-panel" method="post">
          <div class="row">
            <h4 class="col s12 center-align">Cadastrar novo produto</h4>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="name" name="name" type="text" class="validate">
              <label for="name">Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select id="animal" name="animal">
                <option value="" disabled selected>Selecione uma opção</option>
                <?php foreach($animalArray as $animal): ?>
                  <option value="<?=$animal['id']; ?>"><?=$animal['name']; ?></option>
                <?php endforeach; ?>
              </select>
              <label for="animal">Animal</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="weight" name="weight" type="text" class="validate">
              <label for="weight">Peso (g)</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select id="brand" name="brand">
                <option value="" disabled selected>Selecione uma opção</option>
                <?php foreach($brandArray as $brand): ?>
                  <option value="<?=$brand['id']; ?>"><?=$brand['name']; ?></option>
                <?php endforeach; ?>
              </select>
              <label for="brand">Marca</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select id="category" name="category">
                <option value="" disabled selected>Selecione uma opção</option>
                <?php foreach($categoryArray as $category): ?>
                  <option value="<?=$category['id']; ?>"><?=$category['name']; ?></option>
                <?php endforeach; ?>
              </select>
              <label for="category">Categoria</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <select id="provider" name="provider">
                <option value="" disabled selected>Selecione uma opção</option>
                <?php foreach($providerArray as $provider): ?>
                  <option value="<?=$provider['id']; ?>"><?=$provider['name']; ?></option>
                <?php endforeach; ?>
              </select>
              <label for="provider">Fornecedor</label>
            </div>
          </div>
          <div class="row">
            <div class="col right">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
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