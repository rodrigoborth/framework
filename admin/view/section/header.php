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
<header class="sg-main-header">
  <nav class="sg-header-nav">
    <div class="nav-wrapper container">
      <a href="#" data-activates="side-bar" class="admin-button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
      <ul class="side-nav fixed sg-side-bar" id="side-bar">
        <h1 class="sg-logo-h1">Siagi</h1>
        <header class="sg-side-bar-user card-panel row">
            <div class="col s6">
              <img src="/assets/images/sample/sample5.jpg" alt="" class="circle responsive-img">
            </div>
            <div class="col s6">
              <p>user name</p>
              <p>user role</p>
            </div>
        </header>
        <li class="<?php if($pageName=='home') echo 'active'; else echo 'inactive';?>">
          <a href="/admin/home">Home</a>
        </li>
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <?php if(
                $pageName=='novo-produto'
                OR $pageName=='nota-produto'
                OR $pageName=='categorias-produto'
              ):
              ?>
                <a class="collapsible-header active waves-effect waves-teal">Produtos</a>
              <?php else: ?>
                <a class="collapsible-header waves-effect waves-teal">Produtos</a>
              <?php endif; ?>
              <div class="collapsible-body sg-side-bar-sub">
                <ul>
                  <li class="<?php if($pageName=='novo-produto') echo 'active'; else echo 'inactive';?>"><a href="/admin/novo-produto">Novo</a></li>
                  <li class="<?php if($pageName=='nota-produto') echo 'active'; else echo 'inactive';?>"><a href="/admin/nota-produto">Notas</a></li>
                  <li class="<?php if($pageName=='nota-produto') echo 'active'; else echo 'inactive';?>"><a href="/admin/categoria-produto">Categorias</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>