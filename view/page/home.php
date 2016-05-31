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
  <div class="row">
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="http://lorempixel.com/1000/300/nature/1"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="http://lorempixel.com/1000/300/nature/2"> <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="http://lorempixel.com/1000/300/nature/3"> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="http://lorempixel.com/1000/300/nature/4"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="row grey lighten-4">
    <div class="container">
      <?php //Card 1 ?>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?=$htmlRoot?>assets/images/sample/sample1.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-action">
            <a href="#" class="red-text text-darken-4">This is a link</a>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <?php //Card 2 ?>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?=$htmlRoot?>assets/images/sample/sample2.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-action">
            <a href="#" class="red-text text-darken-4">This is a link</a>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <?php //Card 3 ?>
      <div class="col s12 m4">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="<?=$htmlRoot?>assets/images/sample/sample1.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-action">
            <a href="#" class="red-text text-darken-4">This is a link</a>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#test1">Tab 1</a></li>
          <li class="tab col s3"><a href="#test2">Tab 2</a></li>
          <li class="tab col s3"><a href="#test3">Tab 3</a></li>
          <li class="tab col s3"><a href="#test4">Tab 4</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="<?=$htmlRoot?>assets/images/sample/sample4.jpg" alt="" class="circle responsive-img">
            </div>
            <div class="col s10">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
              </span>
            </div>
          </div>
        </div>
      </div>
      <div id="test2" class="col s12">
        <div class="video-container">
          <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div id="test3" class="col s12">
        <ul class="collection">
          <li class="collection-item avatar">
            <img src="<?=$htmlRoot?>assets/images/sample/sample4.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle red">play_arrow</i>
            <span class="title">Title</span>
            <p>First Line <br>
              Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
        </ul>
      </div>
      <div id="test4" class="col s12">Test 4</div>
    </div>
  </div>
</main>
<?php
//get footer of page
require $viewSectionDir."/footer.php";
?>