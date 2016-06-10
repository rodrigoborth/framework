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
  <div>
    <nav class="row black">
      <div class="nav-wrapper">
        <div class="col s10">
          <a href="#" class="breadcrumb">Home</a>
        </div>
        <div class="col s2">
          <div class="switch right">
            <label class="white-text">
              Off
              <input type="checkbox">
              <span class="lever"></span>
              On
            </label>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="row">
    <div class="container">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a class="active" href="#test1">Card</a></li>
          <li class="tab col s3"><a href="#test2">Dynamic Iframe</a></li>
          <li class="tab col s3"><a href="#test3">Collection</a></li>
          <li class="tab col s3"><a href="#test4">Accordion</a></li>
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

      <div id="test4" class="col s12">
        <ul class="collapsible popout" data-collapsible="accordion">
          <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
          </li>
          <li>
            <div class="collapsible-header active"><i class="material-icons">place</i>Second</div>
            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
            <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</main>
<?php
//get footer of page
require $viewSectionDir."/footer.php";
?>